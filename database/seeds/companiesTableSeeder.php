<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Company;

class companiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('companies')->insert([
            'name' => 'Vanguard',
            'description' => "Financial Advisor Services - Vanguard Personal Advisor Services, you get it all at a low cost—only 0.30% of your assets under management annually. Once you're enrolled, you can call or email a Vanguard advisor at your convenience. And with our easy-to-use videoconferencing service, you can also video chat with an advisor from the comfort of your own home. Simply schedule an appointment online, anytime.",
            'website' => 'http://www.vanguard.com',
      ]);
      DB::table('companies')->insert([
            'name' => 'Charles Schwab',
            'description' => "Financial Advisor support available: robo-advisor services offered with a minimum investment of $5,000 and $0 advisory fees. Advisory services include Certified Financial Planner with a minimum investment of $25,000 and the following fee structure: First $100,000: 0.90%; Next $150,000: 0.70%; Next $250,000 0.50%; Next $500,000: 0.30%; and Over $1,000,000: 0.20%.<br/>
            Special offers – 500 commission-free trades for two years. After this period, online equity trades will cost an industry-leading $4.95.<br/> 
            No physical location available.",
            'website' => 'http://www.charlesschwab.com',
      ]);
      DB::table('companies')->insert([
        'name' => 'Ameritrade',
        'description' => "Financial Advisor – Two advising options available. First, automated investing with low-cost, low minimum investment, with access to five goal-oriented ETF portfolios. The minimum investment is $5,000, and the advisory fee is 0.30% of assets under management. Second, a broader range of goal-oriented portfolios made up of mutual funds and ETFs, based on varying investment objectives and risk with ongoing rebalancing and monitoring. The minimum investment is $25,000, and the advisory fee is 0.75%-1.25% for the first $100,000.<br/>
        Special offers – Trade free for 90-days and get up to $600 cash.<br/> 
        Physical locations – 100+ branches nationwide",
        'website' => 'http://www.ameritrade.com',
      ]);
      DB::table('companies')->insert([
            'name' => 'iShares, by BlackRock',
            'description' => "Physical locations – Offices located on the East and West coast, but financial advisor services primarily conducted online with low-fee structure.<br/>
            Special offers – None.",
            'website' => 'http://www.ishares.com',
      ]);
      DB::table('companies')->insert([
        'name' => 'Voya',
        'description' => "Financial Advisors – Average fee of 0.30% of assets under management.<br/>
        Special offers – None.<br/> 
        Physical locations – Offices located on the East and West coast, but financial advisor services primarily conducted online with low-fee structure.",
        'website' => 'http://www.voya.com',
      ]);
  }
}
