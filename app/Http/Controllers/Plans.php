<?php

namespace App\Http\Controllers;
Use App\Models\Plan;
use Cartalyst\Stripe\Stripe;
use Illuminate\Http\Request;

class Plans extends Controller
{

    public function addTicket() {
        Zendesk::tickets()->create([
          'subject' => 'Subject',
          'comment' => [
              'body' => 'Ticket content.'
          ],
          'priority' => 'normal'
      ]);
    }

    public function CheckCoup(Request $request){
        $stripe  = new Stripe(env('STRIPE_API_KEY'), env('STRIPE_API_VERSION'));
        $coupon = $request->input("coupon");
        //dd($coupon);
        //$stripe->coupons()->find($coupon);
        $coupons = $stripe->coupons()->find($coupon);
        if(!empty($coupons)){
            return array('success'=>1);
        }
        else
        {
         return array('success'=>0);
     }
 }
 public function checkPlans(Request $request) {
    $package_option = $request->input("package-option");
    $clients = ($package_option)?$package_option:$request->input("clientcount");
    $planname = $request->input("planname");

    if($planname == 'Standard' || $planname == 'Startup'){
      $plan = Plan::where('plan_name',$planname)->where('cycle',$request->input("plan_cycle"))->first();

      if(!empty($plan)){
        return ['plan_id'=>$plan->plan_id, 'amount'=>$plan->plan_amount,'clients'=>$plan->persons_range_end];
    }
}else{
  $plan = Plan::where('persons_range_start','<=', $clients)->where('persons_range_end','>=',$clients)->first();
  if(!empty($plan)){
    return ['plan_id'=>$plan->plan_id,'amount'=>$plan->plan_amount,'clients'=>$plan->persons_range_end];
}
}




$stripe = new Stripe(env('STRIPE_API_KEY'), env('STRIPE_API_VERSION'));


if(!empty($plan)){
  $plan = $stripe->plans()->find($plan->plan_id);
  if(!empty($plan)){
    echo 'plan exist';
}
else{
    if($clients > 300){
     $ranges = ['301','601','1201','5001'];
     $increments = ['301'=>'25','601'=>'50','1201'=>'100','5001'=>'200'];
     $actual_range = '';
     $start_range = '';
     $end_range = '';
     foreach($ranges as $range){
      if($clients >= $range){
       $actual_range = $range;
   }
}
for ($x = $actual_range; $x <= $clients; $x+=$increments[$actual_range]) {
    $start_range = $x;
    $end_range = $x + $increments[$actual_range];
}

$amount = $end_range*0.4;
$end_range = $end_range -1;
$product = $stripe->products()->create([
    'name' => 'Enterprise Plan ('.$end_range. ')',
    'description' =>'Monthly Subscription for '.$start_range .' to '.$end_range. ' people',
]);
$new_plan = $stripe->plans()->create([
    'amount' => $amount,
    'currency' => 'usd',
    'interval' => 'month',
    'product' => $product['id'],
]);
$cycle = 'month';
$plan =new Plan();
$plan->plan_id = $new_plan['id'];
$plan->plan_amount = $amount;
$plan->cycle = $request->input("plan_cycle");
$plan->persons_range_end = $end_range;
$plan->persons_range_start = $start_range;

$plan->save();

return ['plan_id'=>$new_plan['id'], 'amount'=>$plan->plan_amount,'clients'=>$end_range];

}
}
}else{


  if($clients > 300){
   $ranges = ['301','601','1201','5001'];
   $increments = ['301'=>'25','601'=>'50','1201'=>'100','5001'=>'200'];
   $actual_range = '';
   $start_range = '';
   $end_range = '';
   foreach($ranges as $range){
    if($clients >= $range){
     $actual_range = $range;
 }
}
for ($x = $actual_range; $x <= $clients; $x+=$increments[$actual_range]) {
  $start_range = $x;
  $end_range = $x + $increments[$actual_range];
}

$amount = $end_range*0.4;
$end_range = $end_range -1;
$product = $stripe->products()->create([
  'name' => 'Enterprise Plan ('.$end_range. ')',
  'description' =>'Monthly Subscription for '.$start_range .' to '.$end_range. ' people',
]);
$new_plan = $stripe->plans()->create([
  'amount' => $amount,
  'currency' => 'usd',
  'interval' => 'month',
  'product' => $product['id'],
]);
$cycle = 'month';
$plan =new Plan();
$plan->plan_id = $new_plan['id'];
$plan->plan_amount = $amount;
$plan->cycle = $request->input("plan_cycle");
$plan->persons_range_end = $end_range;
$plan->persons_range_start = $start_range;

$plan->save();
return ['plan_id'=>$new_plan['id'], 'amount'=>$plan->plan_amount];
}
}
}
public function makePalns(Request $request){
  $clients = $request->input("clientcount");

  $ranges = ['301','601','1201','5001'];
  $increments = ['301'=>'25','601'=>'50','1201'=>'100','5001'=>'200'];


  foreach($ranges as $key=>$range){
    $output=[];

    if($clients >=$range){
      if($clients >= $ranges[$key+1]){
        continue;
    }
    $counter = 1;
    $customers = '';
    for ($x = $range; $x <= 5000; $x+=$increments[$range]) {
        if($x >=  $clients){
          $customers =$x;
          break;
      }
  }
  $new_customers = $customers;
  $output[]=$customers;
      //$customers=$clients;
  for ($x = 1; $x <= 10; $x++) {
    if($counter > 5){
      if($customers >= $ranges[$key+1]){
        $inner_range = $ranges[$key+1];
        $customers = $customers + $increments[$inner_range];
        $output[] = $customers;
    }else{
        $customers = $customers + $increments[$range];
        $output[] = $customers;
    }
}else{

  $new_key = ($key > 0)?$key-1:$key;

  if($customers >= 350){

    $inner_range = $ranges[$new_key];
    if($customers <= $ranges[$new_key]){

      $customers = $customers - $increments[$inner_range];
      $output[] = $customers;
  }else{
      if($customers <= 601){
        $customers = $customers - $increments[$inner_range];
    }else{
        $customers = $customers - $increments[$range];
    }

    $output[] = $customers;
}
}

if($counter > 4)
    $customers= $new_customers;

}

$counter++;

}
break;
}

}
sort($output);
  //$output = sort($output);
ob_start();
?>
<option value="">Choose One</option>
<?php
$new_customers = $new_customers-1;
foreach  ($output as $soutput){
    $soutput = $soutput-1;


    //dd($output[5]-1 . ','. $new_customers);
    ?>
    <option value="<?php echo $soutput;  ?>" <?php echo ( $new_customers == $soutput)?'selected':''; ?>><?php echo $soutput; ?> Clients $<?php echo $soutput*0.4;  ?></option>

    <?php
}
return ob_get_clean();
}
}
