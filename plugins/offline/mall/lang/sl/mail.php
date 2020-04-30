<?php return [
    'common' => [
        'hello' => 'Pozdravljeni :firstname',
        'view_order_status_online' => 'Ogled statusa naročila na povezavi',
        'view_order_in_backend' => 'Ogled naročila v vmesniku trgovine',
        'order_details' => 'Podrobnosti naročila',
    ],
    'payment' => [
        'refunded' => [
            'subject' => 'Vaša kupnina je bila povrnjena',
            'message' => 'Pravkar smo vam vrnili kupnino za vaše naročilo **#:number**.',
            'duration' => 'Vračilo kupnine lahko traja nekaj dni.',
        ],
        'paid' => [
            'subject' => 'Zahvaljujemo se vam za plačilo',
            'message' => 'Pravkar smo prejeli plačilo za vaše naročilo **#:number**.',
            'process_order' => 'Začeli bomo s postopkom nadaljne obdelave naročila.',
        ],
        'failed' => [
            'subject' => 'Vašega plačila ni bilo mogoče izvesti',
            'message' => 'Obveščamo vas, da plačila za vše naročilo **#:number** ni bilo mogoče izvesti',
            'payment_advice' => 'Prosim, prijavite se v vaš račun in poskusite ponovno izvesti plačilo naročila.',
            'support' => 'Če imate še vedno težave s plačilom nas prosim kontaktirajte.',
        ],
    ],
    'order' => [
        'partials' => [
            'billing_address' => 'Naslov za račun',
            'billing_and_shipping' => 'Naslov za račun in dostavo',
            'shipping_address' => 'Naslov za dostavo',
            'has_been_paid_on' => 'Naročilo je bilo plačano',
            'currently_pending' => 'Plačilo za to naročilo je trenutno v teku.',
            'track_shipping_status' => 'Statusu vašega naročila lahko sledite z naslednjimi podatki:',
        ],
        'state_changed' => [
            'subject' => 'Status vašega naročila se je spremenil',
            'message' => 'Obveščamo vas, da se je vašemu naročilu **#:number** spremenil status: **:state**',
        ],
        'shipped' => [
            'subject' => 'Vaše naročilo je bilo poslano',
            'message' => 'Vaše naročilo **#:number** je bilo poslano.',
        ],
    ],
    'customer' => [
        'created' => [
            'subject' => 'Dobrodošli v naši trgovini, :firstname',
            'confirm_mail' => 'Dobrodošli v naši trgovini! Prosimo, kliknite na spodnji gumb, da potrdite svoj e-poštni naslov.',
            'message' => 'Dobrodošli v naši trgovini! Prijavite se lahko s svojim e-poštnim naslovom **:email** in začnete z nakupom.',
            'possibilities' => 'Vaš uporabniški račun vam omogoča, da spremljate odprta in pretekla naročila.',
            'button' => [
                'confirm' => 'Potrdite e-poštni naslov',
                'visit_store' => 'Obiščite našo trgovino',
            ],
        ],
    ],
    'checkout' => [
        'succeeded' => [
            'subject' => 'Potrditev vašega naročila #:number',
            'thanks_for_order' => 'Zahvaljujemo se vam za vaše naročilo. Prejeli smo sledeče informacije',
            'check_order_status' => 'Stanje naročila lahko preverite tako, da obiščete funkcijo računa v naši trgovini.',
        ],
        'failed' => [
            'subject' => 'Napaka pri nakupu #:number',
            'problem_message' => 'Žal nam je, da je prišlo do težave pri nakupu. Težavo bomo preverili in vas kontaktirali z nadaljnimi informacijami.',
            'check_order_status' => 'Da preveriti status vašega naročila, se lahko v vsakem trenutku prijavite v našo trgovino.',
            'payment_id' => 'Identifikacija plačila',
            'error' => 'Podrobnosti napake',
        ],
    ],
    'admin' => [
        'checkout_succeeded' => [
            'subject' => 'Novo naročilo #:number',
            'order_placed' => 'V trgovini je bilo odddano naslednje naročilo:',
        ],
        'checkout_failed' => [
            'subject' => 'Nakup ni uspel #:number',
            'not_processed' => 'Sledeče naročilo ni bilo mogoče uspešno izvesti. Potrebno je kontaktirati kupca.',
            'error_details' => 'Podrobnosti napake',
        ],
    ],
];
