<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class PaiementController extends Controller
{
    // Résumé de la commande
    public function resume()
    {
        return view('checkout', ['produits' => []]);
    }
    // Return to specified view after payment
    public function returnUrl(Request $request)
    {
        // request scanning
        // Checking CinetPay Response
        $response = $request->all();
        $paymentMsg = '';
        $status = $response['cpm_trans_status'] ?? 'REFUSED';
        if ($status == 'REFUSED') { // Échec de la transaction...
            if (isset($response['cpm_error_message']) && $response['cpm_error_message'] == 'INSUFFICIENT_BALANCE')
                $paymentMsg = "La paiement a échoué en raison d'un solde insuffisant sur votre compte";
            else
                $paymentMsg = "La transaction a échouée";
        } else if ($status == 'ACCEPTED') { // Succès de la transaction
            $paymentMsg = "Le paiement de votre commande d'un montant de XXX a été effectué avec succès. Merci pour votre confiance.";
        }
        // Return view with message
        // On redirige l'utilisateur sur la page du résultat de la commande
        return view('checkout-result', [
            'status' => $status,
            'paymentMsg' => $paymentMsg
        ]);
    }

    // Appel de l'API de CinetPay
    public function payment(Request $request)
    {
        $commande = $request->all();

        $response = Http::withHeaders([
            'Content-type' => 'application/json',
        ])->post('https://api-checkout.cinetpay.com/v2/payment', [
            'apikey' => '20816034206262c82a727fe0.78787435',
            'site_id' => '640649',
            'transaction_id' => 'commande_du_' . now(),
            'amount' => 2500,
            'currency' => 'XOF',
            'description' => 'Commande du ' . now() . ' pour ' . $commande['nom'] . ' ' . $commande['prenom'],
            'notify_url' => '',
            'return_url' => route('checkout.result'),
            'channels' => 'ALL',
            'lang' => 'fr',
            // Activer l'univers de paiement par carte bancaire
            // 'customer_name' => $commande['nom'],
            // 'customer_surname' => $commande['prenom'],
            // 'customer_phone_number' => $commande['tel'],
            // 'customer_email' => $commande['email'],
            // 'customer_address' => $commande['adresse'],
        ]);
        // redirection
        return Redirect::to($response['data']['payment_url']);
    }
}
