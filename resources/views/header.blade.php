
<div class="myboxupside">
        <p>Sign up and get 20% off your first order. Sign Up Now</p>
    </div>

    <div class="navbar">
        <div class="logo">PRIMAPOI</div>
       
        <div class="categories">
            <p>Woman</p>
            <p>Man</p>
            <p>Accessories</p>
            <p>Kids</p>
            <p>Last Chance</p>
        </div>
        <div class="links">
            <a href="#"><i class="fa fa-envelope"></i></a>
            <a href="{{'login'}}"><i class="fa fa-user"></i></a>
        
        </div>
    </div>
<style>
    
     .myboxupside {
            width: 100%;
            height: 30px;
            background-color: black;
            text-align: center;
            color: white;
            line-height: 30px;
            font-size: 14px;
        }
     .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
            position: relative;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--logo-text-color);
        }
        .logo{
            text-align:left;
        }

        .navbar .categories,
        .navbar .links {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 0;
        }

        .navbar .categories p {
            margin: 0;
            padding: 0 10px;
            font-size: 16px;
            color: var(--logo-text-color);
            cursor: pointer;
        }

        .navbar .links a {
            color: var(--icon-color);
            text-decoration: none;
            font-size: 20px;
            display: flex;
            align-items: center;
            transition: color 0.3s;
        }
 @media screen and (max-width:600px) {
    .navbar .categories p {
            display:none;
        }

        .navbar .links a {
           display:none;
        }
        .navbar .categories,
        .navbar .links {
            display:none;
        }
        
        .logo{
            text-align:center;
        }
        .container {
        flex-direction: column;
        align-items: center;
    }

   
 }
</style>