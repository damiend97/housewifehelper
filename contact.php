<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = htmlspecialchars($_POST['message']);

if(isset($_POST['vaccuum'])) {
   $vaccuum = 'YES';
} else {
   $vaccuum = 'NO';
}

if(isset($_POST['counters'])) {
    $counters = 'YES';
} else {
    $counters = 'NO';
}

if(isset($_POST['dishes'])) {
    $dishes = 'YES';
} else {
    $dishes = 'NO';
}

if(isset($_POST['laundry'])) {
    $laundry = 'YES';
} else {
    $laundry = 'NO';
}

if(isset($_POST['linens'])) {
    $linens = 'YES';
} else {
    $linens = 'NO';
}

if(isset($_POST['fridge'])) {
    $fridge = 'YES';
} else {
    $fridge = 'NO';
}

if(isset($_POST['dinner'])) {
    $dinner = 'YES';
} else {
    $dinner = 'NO';
}

if(isset($_POST['groceryShop'])) {
    $groceryShop = 'YES';
} else {
    $groceryShop = 'NO';
}

if(isset($_POST['groceryPickup'])) {
    $groceryPickup = 'YES';
} else {
    $groceryPickup = 'NO';
}

if(isset($_POST['giftShop'])) {
    $giftShop = 'YES';
} else {
    $giftShop = 'NO';
}

if(isset($_POST['prePickup'])) {
    $prePickup = 'YES';
} else {
    $prePickup = 'NO';
}

if(isset($_POST['pantrys'])) {
    $pantrys = 'YES';
} else {
    $pantrys = 'NO';
}

if(isset($_POST['closets'])) {
    $closets = 'YES';
} else {
    $closets = 'NO';
}

if(isset($_POST['cupboards'])) {
    $cupboards = 'YES';
} else {
    $cupboards = 'NO';
}

if(isset($_POST['linenCloset'])) {
    $linenCloset = 'YES';
} else {
    $linenCloset = 'NO';
}

if(isset($_POST['coatCloset'])) {
    $coatCloset = 'YES';
} else {
    $coatCloset = 'NO';
}

if(isset($_POST['birthday'])) {
    $birthday = 'YES';
} else {
    $birthday = 'NO';
}

if(isset($_POST['christmas'])) {
    $christmas = 'YES';
} else {
    $christmas = 'NO';
}

if(isset($_POST['anniversary'])) {
    $anniversary = 'YES';
} else {
    $anniversary = 'NO';
}

if(isset($_POST['baby'])) {
    $baby = 'YES';
} else {
    $baby = 'NO';
}

$subject = "Housewife Helpers - New Client( $name )...";

$msg = "
Name : $name\n
Phone : $phone\n
Email : $email\n
Message : $message\n

*** SERVICES ***\n
Vaccuum = $vaccuum\n
Counters = $counters\n
Dishes = $dishes\n
Laundry = $laundry\n
Linens = $linens\n
Fridge = $fridge\n
Meal Prep = $dinner\n
Grocery Shop = $groceryShop\n
Grocery Pickup = $groceryPickup\n
Gift Shop = $giftShop\n
Prescription Pickup = $prePickup\n
Pantrys = $pantrys\n
Closets = $closets\n
Cupboards = $cupboards\n
Linen Closet = $linenCloset\n
Coat Closet = $coatCloset\n
Birthday Party = $birthday\n
Christmas Party = $christmas\n
Anniversary = $anniversary\n
Baby Shower = $baby\n
";

$msg = wordwrap($msg,70);

mail("heide.philpot@gmail.com",$subject,$msg);

/* change this to new url */
header('Location: https://housewifehelper.com/response.html');

die();

?>