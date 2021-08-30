<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Issue;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Issue::create(['id'=>'1','helptopic' => 'Regarding Increment / Promotion Only']);
        Issue::create(['id'=>'2','helptopic' => 'Regarding Infrastructure (AC / Tables / Chairs / etc.)']);
        Issue::create(['id'=>'3','helptopic' => 'Regarding Travelling Allowance / Night Allowance / Onsite Allowance / etc. (Allowances Queries)']);
        Issue::create(['id'=>'4','helptopic' => 'Regarding Documents like Appointment Letter or any other documents (Documents)']);
        Issue::create(['id'=>'5','helptopic' => 'Regarding Any Deduction / Attendance / Balance Leave Count / Paid Leave Count / Absentees / etc. Queries Of Salary Slip (Leave Queries)' ]);
        Issue::create(['id'=>'6','helptopic' => 'Regarding Request for New Mobile Phone &amp; Sim Card']);
        Issue::create(['id'=>'7','helptopic' => 'Regarding Computer / Network / Webmail / Accessories issues, Request for any new software/accessories, etc']);
        Issue::create(['id'=>'8','helptopic' => 'Regarding Tax/ Investment Declaration/ Investment Proof/ Form 16 (Income Tax Queries)']);
        Issue::create(['id'=>'9','helptopic' => 'Regarding Name / Designation / Department Changes']);
        Issue::create(['id'=>'10','helptopic' => 'Regarding Salary Payout / PLI Payout / etc. Queries (Salary Queries)']);
    }
}

