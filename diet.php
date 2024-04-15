<html>
<head>
<title>Diet</title>
<link rel="stylesheet"  type="text/css" media="screen" href="diet.css" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>

.navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
.carousel-inner img {
      width: 100%;
      margin: auto;
      min-height:200px;
  }
  header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #ffffff;
    padding: .5rem 3%; /* Adjust the padding as needed */
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}

header .logo{
    font-size: 3rem;
    font-weight:bolder;
    float: center;
    margin-right: auto;
}
header .logo span{
    color: #28bf96;
}

@media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size:90px;
}
.poppins-bold1 {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size:50px;
}
.poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}

</style>
</head>

<body>
<?php 
$exer="";
$food="";
$shape="";
$breakfast="";
if (isset($_POST['i_exp'])) 
{ 
  $exer=$_POST["i_exp"]; 
} 
if (isset($_POST['i_shape'])) 
{ 
  $shape=$_POST["i_shape"]; 
} 
if (isset($_POST['i_food'])) 
{ 
  $food=$_POST["i_food"]; 
}  
if($exer==0 && $food=="veg" && $shape=="underweight"){
  $breakfast=" Smoothie made with banana, spinach, 
  almond milk, oats, and a scoop of protein
  powder (optional)
  Whole-grain toast with almond butter or avocado";
  $morningsnack="Greek yogurt with honey and mixed berries.
  Handful of nuts (almonds, walnuts, or cashews)";
  $lunch="Quinoa salad with mixed vegetables (such as bell peppers, cucumber, cherry
  tomatoes, and shredded carrots), chickpeas, feta cheese, and a lemon-tahini
  dressing.
  Whole-grain pita bread or crackers on the side";
  $eveningsnack=" Hummus with baby carrots, celery sticks, and whole-grain crackers.
  Trail mix with dried fruits and nuts";
  $dinner="Lentil soup with vegetables (like spinach, kale, carrots, and potatoes) served with
  whole-grain bread or rice.
  Grilled tofu or tempeh with roasted sweet potatoes and steamed broccoli";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer==0 && $food=="nonveg" && $shape=="underweight"){
  $breakfast="Scrambled eggs cooked with spinach and 
  topped with avocado slices.
  Whole-grain toast or a small serving of oats with milk 
  and chopped nuts";
  $morningsnack="Greek yogurt with a handful of mixed berries and a drizzle of honey.
  A small serving of mixed nuts (almonds, walnuts, and cashews)";
  $lunch="Grilled chicken or fish (such as salmon or tuna) served with quinoa or brown rice
  and steamed vegetables (broccoli, carrots, and bell peppers).
  Side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette
  dressing";
  $eveningsnack="Protein shake made with milk or almond milk, protein powder, banana, and a
  spoonful of peanut butter.
  Sliced turkey or chicken breast with whole-grain bread or crackers";
  $dinner="Lean beef or turkey stir-fry with mixed vegetables (snap peas, bell peppers,
  mushrooms) and served over brown rice or noodles.
  Baked sweet potato or roasted potatoes as a side dish";
  $fluids="Stay hydrated throughout the day by drinking water, herbal teas, or infused water.
  Incorporate milk or fortified dairy alternatives for additional nutrients like calcium
and vitamin D";
}
else if($exer>0 && $exer<=5 && $food=="veg" && $shape=="underweight"){
  $breakfast=" Oatmeal made with almond milk, topped with sliced banana, berries, and a
  tablespoon of chia seeds.
  Whole-grain toast with almond butter or avocado";
  $morningsnack="Greek yogurt with honey and a handful of mixed nuts (almonds, walnuts, and
  cashews).
  A piece of fruit such as an apple or a pear";
  $lunch="Chickpea salad with mixed greens, cherry tomatoes, cucumber, bell peppers, and
  a lemon-tahini dressing.
  Whole-grain pita bread or crackers on the side";
  $eveningsnack="Cottage cheese with sliced peaches or pineapple.
  Whole-grain crackers with cheese slices or peanut butter";
  $dinner="Lentil soup or stew with vegetables (such as spinach, carrots, potatoes, and
  onions) served with whole-grain bread.
  Grilled tofu or tempeh with quinoa or brown rice and steamed broccoli";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety.";
}
else if($exer>0 && $exer<=5 && $food=="nonveg" && $shape=="underweight"){
  $breakfast=" Scrambled eggs cooked with cheese and served with whole-grain toast or a small
  portion of oatmeal with milk and chopped nuts.
  A glass of fortified orange juice or a piece of fruit like a banana or an apple";
  $morningsnack="Greek yogurt with a drizzle of honey and mixed berries or a handful of mixed nuts
  (almonds, walnuts, and cashews).
  A small serving of cottage cheese with pineapple or sliced peaches";
  $lunch="Grilled chicken or fish (such as salmon or tilapia) served with quinoa, brown rice,
  or whole-grain pasta and steamed vegetables (broccoli, carrots, and green
  beans).
  A side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette
  dressing";
  $eveningsnack="Hummus with carrot and celery sticks, whole-grain crackers, or pita bread.
  Trail mix made with dried fruits and mixed nuts";
  $dinner="Lean beef or turkey burger on a whole-grain bun with avocado slices, lettuce, and
  tomato.
  Baked sweet potato or roasted potatoes as a side dish, along with steamed
  vegetables or a side salad";
  $fluids="Stay hydrated throughout the day by drinking water, herbal teas, or infused water.
  Include milk or fortified dairy alternatives for additional nutrients like calcium and
  vitamin D.";
}
else if($exer>5 && $food=="veg" && $shape=="underweight"){
  $breakfast=" Smoothie bowl made with blended spinach, kale, banana, mixed berries, Greek
  yogurt, and a scoop of protein powder. Top with granola, sliced almonds, and
  chia seeds.
  Whole-grain toast with avocado and scrambled tofu or eggs.";
  $morningsnack="Protein-rich snack such as cottage cheese with pineapple or apple slices, or a
  Greek yogurt parfait with granola and mixed berries.
  Handful of mixed nuts and dried fruits";
  $lunch="Quinoa or lentil salad with mixed vegetables (such as bell peppers, cucumber,
  cherry tomatoes, and shredded carrots), chickpeas, feta cheese, and a
  lemon-tahini dressing.
  Whole-grain pita bread or crackers on the side";
  $eveningsnack="Greek yogurt with honey and a sprinkle of granola or mixed berries.
  Whole-grain crackers with cheese slices or hummus";
  $dinner="Stir-fried tofu or tempeh with mixed vegetables (such as broccoli, bell peppers,
  snap peas, and mushrooms) served over brown rice or quinoa.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing";
  $fluids="Stay hydrated throughout the day by drinking water, herbal teas, or infused water.
  Include electrolyte-rich beverages such as coconut water or sports drinks during
  and after intense exercise sessions";
}
else if($exer>5 && $food=="nonveg" && $shape=="underweight"){
  $breakfast="Scrambled eggs with spinach, mushrooms, and feta cheese, served with
  whole-grain toast or a small portion of oatmeal topped with sliced bananas and
  almonds.
  A glass of fortified orange juice or a piece of fruit like an apple or an orange.";
  $morningsnack="Greek yogurt with honey and mixed berries or a protein smoothie made with
  whey protein powder, almond milk, banana, and spinach.
  A small serving of cottage cheese with pineapple or peach slices";
  $lunch="Grilled chicken breast or salmon fillet served with quinoa, brown rice, or sweet
  potatoes, and steamed vegetables (broccoli, carrots, and green beans).
  Side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette
  dressing";
  $eveningsnack="Greek yogurt with honey and a sprinkle of granola or mixed berries.
  Whole-grain crackers with cheese slices or hummus.";
  $dinner="Grilled steak or turkey breast with roasted potatoes or quinoa and sautéed
  vegetables (such as bell peppers, onions, and zucchini).
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing.";
  $fluids="Stay hydrated throughout the day by drinking water, herbal teas, or infused water.
  Include electrolyte-rich beverages such as coconut water or sports drinks during
  and after intense exercise sessions";
}



else if($exer==0 && $food=="veg" && $shape=="normal"){
  $breakfast="Greek yogurt parfait with layers of Greek yogurt, mixed berries, and granola.
  Whole-grain toast with avocado spread and sliced tomatoes";
  $morningsnack="A piece of fruit such as an apple or a banana.
  Handful of mixed nuts (almonds, walnuts, and cashews) or a small serving of
  trail mix";
  $lunch="Mixed green salad with chickpeas, cherry tomatoes, cucumber, shredded carrots,
  and a vinaigrette dressing.
  Whole-grain pita bread with hummus or a vegetable wrap with grilled tofu and
  avocado";
  $eveningsnack="Carrot and celery sticks with hummus.
  Greek yogurt with honey and a sprinkle of chia seeds";
  $dinner="Lentil soup or stew with mixed vegetables (such as spinach, carrots, potatoes,
  and onions) served with whole-grain bread.
  Stir-fried tofu with broccoli, bell peppers, snap peas, and mushrooms, served over
  brown rice or quinoa";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer==0 && $food=="nonveg" && $shape=="normal"){
  $breakfast=" Scrambled eggs cooked with vegetables (such as spinach, bell peppers, and
  tomatoes) and a slice of whole-grain toast.
  A small serving of mixed fruit (e.g., berries, melon, or grapes)";
  $morningsnack=" Greek yogurt with a drizzle of honey and a handful of mixed nuts (almonds,
  walnuts, and cashews).
  A piece of fruit such as an apple or a pear.";
  $lunch="Grilled chicken or fish (such as salmon or tilapia) served with quinoa or brown
  rice and steamed vegetables (broccoli, carrots, and snap peas).
  Side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette
  dressing";
  $eveningsnack="Greek yogurt with honey and a sprinkle of granola or mixed berries.
  A small serving of cheese with whole-grain crackers or a handful of air-popped
  popcorn.";
  $dinner="Baked or grilled lean beef or turkey with roasted sweet potatoes and sautéed
  green beans.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer>0 && $exer<=5 && $food=="veg" && $shape=="normal"){
  $breakfast="Overnight oats made with almond milk, chia seeds, and mixed berries.
  Whole-grain toast with avocado spread and sliced tomatoes";
  $morningsnack="Greek yogurt with a drizzle of honey and a small handful of mixed nuts (almonds,
  walnuts, and cashews).
  A piece of fruit such as an apple or a banana";
  $lunch="Chickpea salad with mixed greens, cherry tomatoes, cucumber, shredded carrots,
  and a lemon-tahini dressing.
  Whole-grain pita bread with hummus or a vegetable wrap with grilled tofu and
  avocado";
  $eveningsnack="Sliced cucumber with cottage cheese or a small portion of cheese with
  whole-grain crackers.
  Air-popped popcorn seasoned with nutritional yeast or a small bowl of mixed
  berries";
  $dinner="Lentil soup or stew with mixed vegetables (such as spinach, carrots, potatoes,
  and onions) served with whole-grain bread.
  Stir-fried tofu with broccoli, bell peppers, snap peas, and mushrooms, served over
  brown rice or quinoa";
  $fluids=" Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer>0 && $exer<=5 && $food=="nonveg" && $shape=="normal"){
  $breakfast="Scrambled eggs with vegetables (such as spinach, bell peppers, and
  mushrooms) cooked in olive oil.
  Whole-grain toast with avocado spread or a small serving of oatmeal with
  almond milk and mixed berries";
  $morningsnack="Greek yogurt with a drizzle of honey and a small handful of mixed nuts (almonds,
  walnuts, and cashews).
  A piece of fruit such as an apple or a banana";
  $lunch=" Grilled chicken or fish (such as salmon or tilapia) served with quinoa, brown rice,
  or sweet potatoes and steamed vegetables (broccoli, carrots, and green beans).
  Side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette
  dressing";
  $eveningsnack="Cottage cheese with pineapple or peach slices.
  Whole-grain crackers with hummus or guacamole";
  $dinner="Baked or grilled lean beef or turkey with roasted sweet potatoes and sautéed
  green beans.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing.";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer>5 && $food=="veg" && $shape=="normal"){
  $breakfast="Smoothie bowl made with blended spinach, kale, banana, mixed berries, Greek
  yogurt, and a scoop of protein powder. Top with granola, sliced almonds, and
  chia seeds.
  Whole-grain toast with avocado spread and sliced tomatoes";
  $morningsnack="Greek yogurt with a drizzle of honey and a small handful of mixed nuts (almonds,
  walnuts, and cashews).
  A piece of fruit such as an apple or a pear";
  $lunch="Chickpea or lentil salad with mixed greens, cherry tomatoes, cucumber, shredded
  carrots, and a lemon-tahini dressing.
  Whole-grain pita bread with hummus or a vegetable wrap with grilled tofu and
  avocado.";
  $eveningsnack="Greek yogurt with honey and a sprinkle of granola or mixed berries.
  A small serving of cheese with whole-grain crackers or a handful of air-popped
  popcorn";
  $dinner="Stir-fried tofu or tempeh with mixed vegetables (such as broccoli, bell peppers,
  snap peas, and mushrooms) served over brown rice or quinoa.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer>5 && $food=="nonveg" && $shape=="normal"){
  $breakfast="Scrambled eggs with vegetables (such as spinach, bell peppers, and
  mushrooms) cooked in olive oil.
  whole-grain toast with avocado spread and sliced tomatoes";
  $morningsnack="Greek yogurt with a drizzle of honey and a small handful of mixed nuts (almonds,
  walnuts, and cashews).
  A piece of fruit such as an apple or a banana";
  $lunch="Grilled chicken or fish (such as salmon or tilapia) served with quinoa, brown rice,
  or sweet potatoes and steamed vegetables (broccoli, carrots, and snap peas).
  Side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette
  dressing";
  $eveningsnack="Greek yogurt with honey and a sprinkle of granola or mixed berries.
  A small serving of cheese with whole-grain crackers or a handful of air-popped
  popcorn";
  $dinner="Baked or grilled lean beef or turkey with roasted sweet potatoes and sautéed
  green beans.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}


else if($exer==0 && $food=="veg" && $shape=="overweight"){
  $breakfast="Overnight oats made with almond milk, chia seeds, and mixed berries.
  A small serving of mixed nuts (almonds, walnuts, and cashews)";
  $morningsnack="Greek yogurt with a drizzle of honey and a handful of mixed berries.
  Carrot and celery sticks with hummus";
  $lunch="Quinoa salad with mixed vegetables (such as bell peppers, cucumber, cherry
  tomatoes, and shredded carrots) and a lemon-tahini dressing.
  Whole-grain pita bread with hummus or a vegetable wrap with avocado and tofu";
  $eveningsnack="Air-popped popcorn seasoned with nutritional yeast or a small serving of mixed
  fruit.
  Greek yogurt with honey and a sprinkle of granola";
  $dinner="Stir-fried tofu with mixed vegetables (such as broccoli, bell peppers, snap peas,
  and mushrooms) served over cauliflower rice.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety.";
}
else if($exer==0 && $food=="nonveg" && $shape=="overweight"){
  $breakfast=" Scrambled eggs cooked with spinach, tomatoes, and onions.
  Whole-grain toast with avocado spread";
  $morningsnack="Greek yogurt with a drizzle of honey and mixed berries.
  A small serving of mixed nuts (almonds, walnuts, and cashews)";
  $lunch="Grilled chicken or fish (such as salmon or tilapia) served with quinoa or brown
  rice and steamed vegetables (broccoli, carrots, and snap peas).
  Side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette
  dressing";
  $eveningsnack="Cottage cheese with pineapple or peach slices.
  A small serving of cheese with whole-grain crackers";
  $dinner="Baked or grilled lean beef or turkey with roasted sweet potatoes and sautéed
  green beans.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic vinaigrette dressing";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer>0 && $exer<=5 && $food=="veg" && $shape=="overweight"){
  $breakfast="Whole-grain toast with mashed avocado and sliced tomatoes.
  Greek yogurt with a drizzle of honey and mixed berries";
  $morningsnack="Carrot and cucumber sticks with hummus.
  A small serving of mixed nuts (almonds, walnuts, and cashews)";
  $lunch="Quinoa salad with mixed vegetables (such as bell peppers, cucumber, cherry
  tomatoes, and shredded carrots) and a lemon-tahini dressing.
  Whole-grain pita bread with hummus or a vegetable wrap with avocado and tofu";
  $eveningsnack="Cottage cheese with pineapple or peach slices.
  A small serving of cheese with whole-grain crackers";
  $dinner="Stir-fried tofu with mixed vegetables (such as broccoli, bell peppers, snap peas,
  and mushrooms) served over cauliflower rice.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing.";
  $fluids="Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer>0 && $exer<=5 && $food=="nonveg" && $shape=="overweight"){
  $breakfast="Scrambled eggs cooked with spinach and tomatoes.
  Whole-grain toast with avocado spread";
  $morningsnack="Greek yogurt with a drizzle of honey and mixed berries.
  A small serving of mixed nuts (almonds, walnuts, and cashews)";
  $lunch=" Grilled chicken or fish (such as salmon or tilapia) served with quinoa or brown
  rice and steamed vegetables (broccoli, carrots, and snap peas).
  Side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette
  dressing";
  $eveningsnack=" Cottage cheese with pineapple or peach slices.
  A small serving of cheese with whole-grain crackers";
  $dinner="Baked or grilled lean beef or turkey with roasted sweet potatoes and sautéed
  green beans.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing";
  $fluids=" Drink plenty of water throughout the day to stay hydrated.
  Include herbal teas or infused water for variety";
}
else if($exer>5 && $food=="veg" && $shape=="overweight"){
  $breakfast="Overnight oats made with almond milk, chia seeds, mixed berries, and a scoop of
  protein powder.
  Whole-grain toast with avocado spread and sliced tomatoes";
  $morningsnack="Greek yogurt with a drizzle of honey and mixed berries.
  A small serving of mixed nuts (almonds, walnuts, and cashews)";
  $lunch="Quinoa salad with mixed vegetables (such as bell peppers, cucumber, cherry
  tomatoes, shredded carrots) and a lemon-tahini dressing.
  Grilled tofu or tempeh with sautéed spinach and brown rice";
  $eveningsnack="Hummus with carrot and cucumber sticks.
  Protein smoothie made with spinach, banana, almond milk, and a scoop of
  protein powder";
  $dinner="Stir-fried tofu or tempeh with mixed vegetables (such as broccoli, bell peppers,
  snap peas, and mushrooms) served over quinoa.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing";
  $fluids="Drink plenty of water throughout the day to stay hydrated, especially before,
  during, and after exercise. Include herbal teas or infused water for variety";
}
else if($exer>5 && $food=="nonveg" && $shape=="overweight"){
  $breakfast="Scrambled eggs with spinach, tomatoes, and onions cooked in olive oil.
  Whole-grain toast with avocado spread";
  $morningsnack="Greek yogurt with a drizzle of honey and mixed berries.
  A small serving of mixed nuts (almonds, walnuts, and cashews)";
  $lunch="Grilled chicken or fish (such as salmon or tilapia) served with quinoa or brown
  rice and steamed vegetables (broccoli, carrots, and snap peas).
  Side salad with mixed greens, cherry tomatoes, cucumber, and vinaigrette dressing";
  $eveningsnack="Cottage cheese with pineapple or peach slices.
  A small serving of cheese with whole-grain crackers";
  $dinner="Baked or grilled lean beef or turkey with roasted sweet potatoes and sautéed
  green beans.
  Side salad with mixed greens, avocado, cherry tomatoes, and balsamic
  vinaigrette dressing";
  $fluids="Drink plenty of water throughout the day to stay hydrated, especially before,
  during, and after exercise.
  Include herbal teas or infused water for variety";
}

?>

<header>
  <a href="index.html" class="logo" style="color:#111827; text-decoration:none;"><span>FIT</span>Sync.</a>
</header>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarouse1" data-slide-to="2"></li>
      <li data-target="#myCarouse1" data-slide-to="3"></li>
      <li data-target="#myCarouse1" data-slide-to="4"></li>
      <li data-target="#myCarouse1" data-slide-to="5"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="p1.jpg" alt="Image" width="20%" height="30%">
        <div class="carousel-caption">
          <p class="poppins-bold" style="padding-right:550px;">BREAKFAST</p>
          <p class="poppins-regular" style="padding-right:500px; padding-bottom:100px ;text-align:left" ><?php echo "$breakfast";?></p>
        </div>      
      </div>

      <div class="item">
        <img src="p2.jpg" alt="Image">
        <div class="carousel-caption">
        <p class="poppins-bold" style="padding-left:500px;">MORNING SNACK</p>
        <p class="poppins-regular" style="padding-left:500px;padding-bottom:20px; text-align:left"><?php echo "$morningsnack";?></p>
        </div>      
      </div>
      
      <div class="item">
        <img src="p3.jpg" alt="Image">
        <div class="carousel-caption">
        <p class="poppins-bold" style="padding-left:550px;">LUNCH</p>
        <p class="poppins-regular" style="padding-left:550px;padding-bottom:65px; text-align:left ;display:block;"><?php echo "$lunch";?></p>
        </div>      
      </div>
      <div class="item">
        <img src="p4.jpg" alt="Image">
        <div class="carousel-caption">
        <p class="poppins-bold" style="padding-left:500px;">EVENING SNACK</p>
        <p class="poppins-regular" style="padding-left:500px;padding-bottom:20px; text-align:left"><?php echo "$eveningsnack";?></p>
        </div>      
      </div>
      <div class="item">
        <img src="p5.jpg" alt="Image">
        <div class="carousel-caption">
        <p class="poppins-bold" style="padding-right:700px;padding-top:200px;color:black;">DINNER</p>
          <p class="poppins-regular" style="padding-right:500px;text-align:left;color:black;" ><?php echo "$dinner";?></p>
        </div>      
      </div>
      <div class="item">
        <img src="p6.jpg" alt="Image">
        <div class="carousel-caption">
        <p class="poppins-bold" style="padding-right:700px;color:black;">FLUIDS</p>
          <p class="poppins-regular" style="padding-right:500px;text-align:left;padding-bottom:100px;color:black;" ><?php echo "$fluids";?></p>
        </div>      
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3 class="poppins-bold1">For more information</h3><br>
  <div class="row">
    <div>
      <center>
      <img src="ph1.jpg" class="img-responsive" style="width:50%" alt="Image">
      </center>
    </div>
    
    <div >
      <div class="well">
       <p class="poppins-regular">Proper hydration is essential for overall health. Aim to drink around 8-10 cups (about 2-2.5 liters) of water per day, adjusting based on factors like activity level and climate. Listen to your body's thirst cues to ensure you stay adequately hydrated.</p>
      </div>
      <div class="well">
       <p class="poppins-regular">In terms of diet, focus on a balanced intake of nutrients from various food groups. Incorporate plenty of fruits and vegetables for vitamins, minerals, and fiber. Include lean proteins such as poultry, fish, beans, and tofu for muscle repair and growth.</p>
      </div>
    </div>
  </div>
</div><br>




</body>
</html>