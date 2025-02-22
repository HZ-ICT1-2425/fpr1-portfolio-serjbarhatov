<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'How can you print a document from your laptop at HZ?',
                'answer' => '1. Open <a href="https://hz.mynetpay.nl/Login" class="faq-external-link" target="_blank">this website</a> and then click on Upload files now. Then, use your HZ card at the printer to print the document.<br><br>
                2. Log in with your HZ.<br><br>
                3. Tap Web Print.<br><br>
                4. At Step 1 select a printer, check the settings (format, single or double sided, etc.)<br><br>
                5. Click the field Step 2: Select files to choose your files.<br><br>
                6. Click on Upload files now. Then, use your HZ card at the printer to print the document.',
                'link' => 'https://hz.mynetpay.nl/Login',
            ],
            [
                'question' => 'How can you scan a document and send it to your laptop at HZ?',
                'answer' => '1. Log into your printer using your HZ card by entering your HZ username and password.<br><br>
                2. Choose the Scan option in the menu.<br><br>
                3. Place the document on the glass plate.<br><br>
                4. Press Start.<br><br>
                5. After scanning, press the symbol in the top right corner to log off.',
                'link' => null,
            ],
            [
                'question' => 'How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?',
                'answer' => '1. Go to the <a href="https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097" class="faq-external-link" target="_blank">web shop\'s page</a><br><br>
                2. Put the desired item in the cart (Click the "order" button).<br><br>
                3. Go to the checkout and pay for the item.',
                'link' => 'https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097',
            ],
            [
                'question' => 'How can you book a project space?',
                'answer' => '1. Go to <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner" class="faq-external-link" target="_blank">this website</a><br><br>
                2. Book a room.',
                'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner',
            ],
            [
                'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
                'answer' => 'It is possible at Kousteensedijk, but you have to request cards at the JRCZ service desk.',
                'link' => null,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::firstOrCreate(['question' => $faq['question']], $faq);
        }
    }
}
