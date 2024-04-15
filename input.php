
<html>
<head>
    <link rel="stylesheet" href="input.css"/>
    <title>Dashboard</title>
</head>
<body style="background: url('fruits.png') no-repeat; background-size: cover; background-position: center;">
    <nav>
        <a href="index.html" class="nav_logo" style="font-size: 3rem;
        color: #111827; text-decoration: none;">
            <span style="color: #28bf96">FIT</span>Sync.
        </a>
        <div id="light" onclick="dark()">
            <img src="lightmode.png" width="60" height="60">
        </div>
        <div id="dark" onclick="light()">
            <img src="darkmode.png" width="60" height="60">
        </div>
    </nav>
    <div class="form_box">
        <div class="top">
            <header>Find My Diet</header>
        </div>
    </div>
    
    <form class="input_box" action="diet.php" method="POST">
        <div id="box"class="two_forms">
            <div class="register_container">
                <input type="number" class="input_field" id="i_height" name="i_height" placeholder="Height" min="0" max="300" required>
                <input type="number" class="input_field" id="i_weight" name="i_weight" placeholder="Weight" min="0" max="300" required>
                <input type="number" class="input_field" id="i_age" name="i_age" placeholder="Age" min="18" max="110" required>
                <input type="HIDDEN" id="i_shape" name="i_shape">
    
                <input type="number" class="input_field" id="i_exp" name="i_exp"  placeholder="Number of Hours you can Exercise" min="0" max="10" required>
                <!--value stores in 'i_food' as either 'veg'/'nonveg'-->
                <button type="button" id="i_veg" name="i_veg" onmouseenter="enter_veg()" onmouseout="leave_veg()" onclick="veg()">Veg</button>
                <button type="button" id="i_nonveg" name="i_nonveg" onmouseenter="enter_nonveg()" onmouseout="leave_nonveg()" onclick="nonveg()">Non-Veg</button>
                <input type="hidden" id="i_food" name="i_food">

                <button type="button" id="i_proc" name="i_proc" onclick="proc()">Process Data</button>
                
            </div>
        </div>
                <button type="submit" id="submit" name="submit" >Find My Diet</button>
            
    </form>

    <div class="info" id="box2">
        <p id="infotxt" style='display: none'>Enter Some Data</p>
    </div>
        
        

    <script>
        function dark(){
            document.getElementById("dark").style.visibility = "visible";
            document.getElementById("light").style.visibility = "hidden";
            document.querySelector('nav').style.setProperty('background-color', 'rgba(255, 255, 255, 0.1)');
            document.querySelector('html').style.setProperty('background-color', 'var(--darkbg)');
            document.getElementById('submit').style.setProperty('background-color', '#121212');
            document.getElementById('submit').style.setProperty('color', 'white');


            document.querySelector(':root').style.setProperty('--primary-color2', '#3e8de3');
            document.querySelector(':root').style.setProperty('--primary-color3', '#53cbfb');
        }
        function light(){
            document.getElementById("light").style.visibility = "visible";
            document.getElementById("dark").style.visibility = "hidden";
            document.querySelector('nav').style.setProperty('background-color', 'rgba(0, 0, 0, 0.2)');
            document.querySelector('html').style.setProperty('background-color', 'var(--lightbg)');
            document.getElementById('submit').style.setProperty('background-color', 'white');
            document.getElementById('submit').style.setProperty('color', 'black');
            document.querySelector(':root').style.setProperty('--primary-color2', '#95ddeaff');
            document.querySelector(':root').style.setProperty('--primary-color3', '#7ec6dcff');
        }

        function proc()
        {
            document.getElementById("submit").style.visibility = "visible";
            document.getElementById("box").style.animationPlayState = "running";
            document.getElementById("box2").style.animationPlayState = "running";
            
            document.getElementById("infotxt").style.animationPlayState = "running";
            document.getElementById("infotxt").style.display = "block";


            var h=Number(document.getElementById("i_height").value);
            var w=Number(document.getElementById("i_weight").value);
            var a=Number(document.getElementById("i_age").value);
            var exp=Number(document.getElementById("i_exp").value);
            
            h=h/100;
            var bmi=w/(h*h); 
            if(bmi < 18.5)
            {
                document.getElementById("infotxt").innerHTML="You Are Under Weight<br><img  id=\"infoimg3\" src=\"underweight.png\">";
                document.getElementById("i_shape").value="underweight";
                document.getElementById("infoimg3").style.animationPlayState = "running";
            }
            else if(bmi>=18.5 && bmi<25)
            {
                document.getElementById("infotxt").innerHTML="You Are Normal Weight<br><img  id=\"infoimg2\" src=\"normalweight.png\">";
                document.getElementById("i_shape").value="normal";
                document.getElementById("infoimg2").style.animationPlayState = "running";
            }
            else if(bmi>=25)
            {
                document.getElementById("infotxt").innerHTML="You Are Over Weight<br><img  id=\"infoimg1\" src=\"overweight.png\">";
                document.getElementById("i_shape").value="overweight";
                document.getElementById("infoimg1").style.animationPlayState = "running";
            }
        }
    
        var flag=0;
        function enter_veg()
        {
            if(flag!=1)
            {
                document.getElementById("i_veg").style.backgroundColor="lightgreen";
            }
        }
        function enter_nonveg()
        {
            if(flag!=2)
            {
                document.getElementById("i_nonveg").style.backgroundColor="crimson";
            }
        }
        function leave_veg()
        {
            document.getElementById("i_veg").style.backgroundColor="white";
            
            if(flag==1)
            {
                document.getElementById("i_veg").style.backgroundColor="chartreuse";
            }
            else if(flag==2)
            {
                document.getElementById("i_veg").style.backgroundColor="lightgray";
            }
        }
        function leave_nonveg()
        {
            document.getElementById("i_nonveg").style.backgroundColor="white";
            
            if(flag==1)
            {
                document.getElementById("i_nonveg").style.backgroundColor="lightgray";
            }
            else if(flag==2)
            {
                document.getElementById("i_nonveg").style.backgroundColor="firebrick";
            }
        }
        function veg()
        {
            document.getElementById("i_veg").style.backgroundColor="chartreuse";
            document.getElementById("i_nonveg").style.backgroundColor="lightgray";
            document.getElementById("i_food").value="veg";
            flag=1;
        }
        function nonveg()
        {
            document.getElementById("i_veg").style.backgroundColor="lightgrey";
            document.getElementById("i_nonveg").style.backgroundColor="firebrick";
            document.getElementById("i_food").value="nonveg";
            flag=2;
        }


    </script>
</body>
</html>