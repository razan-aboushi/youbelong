<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_methods = [
            'Qlik',
            'Bank',
            'PayPal',
            'Credit Card',
        ];

        foreach ($payment_methods as $payment_methods){
            PaymentMethod::updateOrCreate([
                'name' => $payment_methods,
            ]);
        }
    }
}
