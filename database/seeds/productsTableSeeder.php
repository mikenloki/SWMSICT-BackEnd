<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
            'companyID' => 1,
            'name' => 'Vanguard Target Retirement 2015 Fund (VTENX)',
            'summary' => "The 2015 Fund invests in 5 Vanguard index funds, holding approximately 70% of assets in bonds and 30% in stocks. Investors in this fund should be able to tolerate the volatility of the stock and bond markets. <br/>
            Net asset value (value per share of a Mutual fund or ETF at a given date and time) $15.75.<br/>
            Average annual 10-year return – 6.92%<br/>
            Acquired fund fees and expenses 0.13%<br/>
            Minimum investment $1,000",
            'riskLevel' => 3,
            'fees' => 0.13,
            'performance' => 6.92,
            'minInvestment' => 1000,
            'physicalLocationAvailable' => 0,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 1,
            'isBond' => 1,
            'isMutualFund' => 0,
            'isETF' => 0,
            'isRetirement' => 1,
            'isIndexfund' => 1,
      ]);
      DB::table('products')->insert([
            'companyID' => 1,
            'name' => 'Vanguard Target Retirement 2025 Fund (VTTVX)',
            'summary' => "The 2025 fund invests in 4 Vanguard index funds, holding approximately 65% of assets in stocks and 35% in bonds. You may wish to consider this fund if you’re planning to retire between 2023 and 2027.<br/>
            Net asset value $18.25<br/>
            Average annual return 5-year 8.85%<br/>
            Acquired fund fees and expenses 0.14%<br/>
            Minimum investment $1,000",
            'riskLevel' => 2,
            'fees' => 0.14,
            'performance' => 8.85,
            'minInvestment' => 1000,
            'physicalLocationAvailable' => 0,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 1,
            'isBond' => 1,
            'isMutualFund' => 0,
            'isETF' => 0,
            'isRetirement' => 1,
            'isIndexfund' => 1,
      ]);
      DB::table('products')->insert([
            'companyID' => 1,
            'name' => 'Vanguard Target Retirement 2060 Fund (VTTSX)',
            'summary' => "The 2060 fund invests in 4 Vanguard index funds, holding approximately 90% of assets in stocks and 10% in bonds. You may wish to consider this fund if you’re planning to retire between 2058 and 2062.<br/>
            Net asset value $33.51<br/>
            Average annual return 5-year 10.87%<br/>
            Acquired fund fees and expenses 0.16%<br/>
            Minimum investment $1,000",
            'riskLevel' => 1,
            'fees' => 0.16,
            'performance' => 10.87,
            'minInvestment' => 1000,
            'physicalLocationAvailable' => 0,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 1,
            'isBond' => 1,
            'isMutualFund' => 0,
            'isETF' => 0,
            'isRetirement' => 1,
            'isIndexfund' => 1,
      ]);

      DB::table('products')->insert([
            'companyID' => 2,
            'name' => 'Schwab Target 2015 Index Fund SWYBX',
            'summary' => "The fund seeks to achieve its investment objective by investing primarily in affiliated Schwab exchange-traded funds (ETFs). It has a policy to invest, under normal circumstances, at least 80% of its assets (net assets, plus the amount of any borrowings for investment purposes) in underlying funds that are managed to seek investment returns that track particular market indices. The fund is managed based on the specific retirement date (target date) included in its name and assumes a retirement age of 65.<br/>
            Net asset value $10.61<br/>
            Average annual return 5-year 6.57%<br/>
            Net Expense Ratio 0.08%<br/>
            Minimum investment $1",
      'riskLevel' => 2,
            'fees' => 0.08,
            'performance' => 6.57,
            'minInvestment' => 1,
            'physicalLocationAvailable' => 0,
            'specialOffersAvailable' => 1,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 0,
            'isETF' => 1,
            'isRetirement' => 0,
            'isIndexfund' => 1,
      ]);
      DB::table('products')->insert([
            'companyID' => 2,
            'name' => 'Schwab Target 2025 Index Fund SWYDX',
            'summary' => "The fund seeks to achieve its investment objective by investing primarily in affiliated Schwab exchange-traded funds (ETFs). It has a policy to invest, under normal circumstances, at least 80% of its assets (net assets, plus the amount of any borrowings for investment purposes) in underlying funds that are managed to seek investment returns that track particular market indices. The fund is managed based on the specific retirement date (target date) included in its name and assumes a retirement age of 65.<br/>
            Net asset value $11.04<br/>
            Average annual return 5-year 7.46%<br/>
            Net Expense Ratio 0.08%<br/>
            Minimum investment $1",
      'riskLevel' => 2,
            'fees' => 0.08,
            'performance' => 7.46,
            'minInvestment' => 1,
            'physicalLocationAvailable' => 0,
            'specialOffersAvailable' => 1,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 0,
            'isETF' => 1,
            'isRetirement' => 0,
            'isIndexfund' => 1,
      ]);
      DB::table('products')->insert([
            'companyID' => 2,
            'name' => 'Schwab Target 2060 Index Fund SWYNX',
            'summary' => "Target-date portfolios provide a diversified exposure to stocks, bonds, and cash for those investors who have a specific date in mind (in this case, the year 2060 and beyond) for retirement. These portfolios aim to provide investors with an optimal level of return and risk, based solely on the target date. Management adjusts the allocation among asset classes to more-conservative mixes as the target date approaches, following a preset glide path. A target-date portfolio is part of a series of funds offering multiple retirement dates to investors.<br/>
            Net asset value $11.59<br/>
            Average annual return 5-year 10.79%<br/>
            Net Expense Ratio 0.08%<br/>
            Minimum investment $1",
      'riskLevel' => 2,
            'fees' => 0.08,
            'performance' => 10.79,
            'minInvestment' => 1,
            'physicalLocationAvailable' => 0,
            'specialOffersAvailable' => 1,
            'show' => 1,
            'isStock' => 1,
            'isBond' => 1,
            'isMutualFund' => 0,
            'isETF' => 0,
            'isRetirement' => 0,
            'isIndexfund' => 1,
      ]);

      DB::table('products')->insert([
            'companyID' => 3,
            'name' => 'Selective Core Mutual Funds Portfolios',
            'summary' => "May be best suited for those with a low risk tolerance and/or a short time frame before retirement—or those who are simply conservative investors. Consists of 25% equity expose and 75% dedicated to fixed income.<br/>
            Average annual return 5-year 3.16%<br/>
            Net Expense Ratio 1.00%<br/>
            Minimum investment $25,000",
            'riskLevel' => 3,
            'fees' => 1.00,
            'performance' => 3.16,
            'minInvestment' => 25000,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 1,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 1,
            'isETF' => 0,
            'isRetirement' => 0,
            'isIndexfund' => 0,
      ]);
      DB::table('products')->insert([
            'companyID' => 3,
            'name' => 'Selective Core Mutual Funds Portfolios',
            'summary' => "Designed for investors with a moderate risk tolerance who are in pursuit of modest growth and have several years to do so. Consists of 50% equity expose and 50% dedicated to fixed income.<br/>
            Average annual return 5-year 6.09%<br/>
            Net Expense Ratio 1.00%<br/>
            Minimum investment $25,000",
            'riskLevel' => 2,
            'fees' => 1.00,
            'performance' => 6.09,
            'minInvestment' => 25000,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 1,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 1,
            'isETF' => 0,
            'isRetirement' => 0,
            'isIndexfund' => 0,
      ]);
      DB::table('products')->insert([
            'companyID' => 3,
            'name' => 'Selective Core Mutual Funds Portfolios',
            'summary' => "May be best suited for those who can tolerate large market ﬂuctuations and increased risk and plan to invest over a long period of time. Consists of 83% equity expose and 17% dedicated to fixed income.<br/>
            Average annual return 5-year 10.10%<br/>
            Net Expense Ratio 1.00%<br/>
            Minimum investment $25,000",
            'riskLevel' => 1,
            'fees' => 1.00,
            'performance' => 10.10,
            'minInvestment' => 25000,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 1,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 1,
            'isETF' => 0,
            'isRetirement' => 0,
            'isIndexfund' => 0,
      ]);

      DB::table('products')->insert([
            'companyID' => 4,
            'name' => 'iShares Core Conservative Allocation ETF (AOK)',
            'summary' => "The iShares Core Conservative Allocation ETF seeks to track the investment results of an index composed of a portfolio of underlying equity and fixed income funds intended to represent a conservative target risk allocation strategy.<br/>
            Net asset value $34.45<br/>
            Average annual return 5-year 4.65%<br/>
            Net Expense Ratio 0.25%",
            'riskLevel' => 3,
            'fees' => 0.25,
            'performance' => 4.65,
      'minInvestment' => 0,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 0,
            'isETF' => 1,
            'isRetirement' => 0,
            'isIndexfund' => 0,
      ]);
      DB::table('products')->insert([
            'companyID' => 4,
            'name' => 'iShares Core Moderate Allocation ETF (AOM)',
            'summary' => "The iShares Core Moderate Allocation ETF seeks to track the investment results of an index composed of a portfolio of underlying equity and fixed income funds intended to represent a moderate target risk allocation strategy.<br/>
            Net asset value $37.95<br/>
            Average annual return 5-year 5.97%<br/>
            Net Expense Ratio 0.25%",
            'riskLevel' => 2,
            'fees' => 0.25,
            'performance' => 5.97,
      'minInvestment' => 0,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 0,
            'isETF' => 1,
            'isRetirement' => 0,
            'isIndexfund' => 0,
      ]);
      DB::table('products')->insert([
            'companyID' => 4,
            'name' => 'iShares Core Aggressive Allocation ETF (AOA)',
            'summary' => "The iShares Core Aggressive Allocation ETF seeks to track the investment results of an index composed of a portfolio of underlying equity and fixed income funds intended to represent an aggressive target risk allocation strategy.<br/>
            Net asset value $53.55<br/>
            Average annual return 5-year 10.32%<br/>
            Net Expense Ratio 0.25%",
            'riskLevel' => 1,
            'fees' => 0.25,
            'performance' => 10.32,
      'minInvestment' => 0,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 0,
            'isETF' => 1,
            'isRetirement' => 0,
            'isIndexfund' => 0,
      ]);

      DB::table('products')->insert([
            'companyID' => 5,
            'name' => 'LifePath® Index 2020 Non-Lendable Fund F',
            'summary' => "The Fund seeks to provide for retirement outcomes consistent with investor preferences throughout the savings and draw down phase based on quantitatively measured risk that investors, on average, may be willing to accept. The LifePath® Index 2020 Non-Lendable Fund F's Custom Benchmark is a comparison benchmark for the performance of the Fund.<br/>
            Average annual return 5-year 6.46%<br/>
            Net Expense Ratio 0.10%<br/>
            Minimum investment $1,000",
      'riskLevel' => 2,
            'fees' => 0.10,
            'performance' => 6.46,
            'minInvestment' => 1000,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 1,
            'isETF' => 0,
            'isRetirement' => 0,
            'isIndexfund' => 1,
      ]);
      DB::table('products')->insert([
            'companyID' => 5,
            'name' => 'LifePath® Index 2025 Non-Lendable Fund F',
            'summary' => "The Fund seeks to provide for retirement outcomes consistent with investor preferences throughout the savings and draw down phase based on quantitatively measured risk that investors, on average, may be willing to accept. The LifePath® Index 2025 Non-Lendable Fund F's Custom Benchmark is a comparison benchmark for the performance of the Fund.<br/>
            Average annual return 5-year 7.32%<br/>
            Net Expense Ratio 0.10%<br/>
            Minimum investment $1,000",
      'riskLevel' => 2,
            'fees' => 0.10,
            'performance' => 7.32,
            'minInvestment' => 1000,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 0,
            'isBond' => 0,
            'isMutualFund' => 1,
            'isETF' => 0,
            'isRetirement' => 0,
            'isIndexfund' => 1,
      ]);
      DB::table('products')->insert([
            'companyID' => 5,
            'name' => 'LifePath® Index 2060 Non-Lendable Fund F',
            'summary' => "The Fund seeks to provide for retirement outcomes consistent with investor preferences throughout the savings and draw down phase based on quantitatively measured risk that investors, on average, may be willing to accept. The LifePath® Index 2060 Non-Lendable Fund F's Custom Benchmark is a comparison benchmark for the performance of the Fund.<br/>
            Average annual return 5-year 9.51%<br/>
            Net Expense Ratio 0.10%<br/>
            Minimum investment $1,000",
      'riskLevel' => 1,
            'fees' => 0.10,
            'performance' => 9.51,
            'minInvestment' => 1000,
            'physicalLocationAvailable' => 1,
            'specialOffersAvailable' => 0,
            'show' => 1,
            'isStock' => 1,
            'isBond' => 0,
            'isMutualFund' => 1,
            'isETF' => 0,
            'isRetirement' => 0,
            'isIndexfund' => 1,
      ]);
  }
}
