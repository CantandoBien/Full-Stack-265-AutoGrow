<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include ('menu.php'); ?>
    <br /><br /><br /><br />
    <div class='cero'>
        <img class='bor01' src='./images/hexL.svg' alt='' />
        <div>
            <span class='cero03'>Congratulations! Seems Like<br />You Are A Good Fit.</span><br /><br />
            <span class='cero04' style='font-size: 1.8vh'>Check out the packages listed below</span><br /><br /><br />
            <div class='cero05'>
                <form action="/action_page.php">
                    <select id="cars" name="" class="cero06">
                        <option>Per Lead, Appointment or Sale Plan &lpar;Lowest...</option>
                        <option value="volvo">Per Lead</option>
                        <option value="saab">Appointment</option>
                        <option value="audi">Sale Plan</option>
                    </select>
                </form>
            </div>
        </div>
        <img class='bor01' src='./images/hexR.svg' alt='' />
    </div>
    <div class='bee1'></div>
    <div class='path1'></div><br /><br /><br /><br /><br /><br /><br /><br />
    <hr size="8px" width='4%' color="#F2BD2A" style="margin: 0; text-align: left; position:absolute; left: 5%" />
    <br /><br />
    <div class='cero07'><span class='cero08'>All-in-One Marketing at<br />Unbeatable Prices</span><br />
        <span class='cero09'>Looking for the perfect all-in-one marketing solution that can help you
            with:</span><br /><br />
        <span class='cero10'>…And practically everything else you need to build success with your digital
            marketing?<br /><br />

            With our hive of expert marketers, Local Digital Buzz offers a wide range of services to help get customers
            buzzing about your business.<br /><br />

            That means you can delegate all your marketing tasks to us so that you have more time to “bee”
            yourself!</span>
        </span>
    </div>
    <div class='panit'><?php include ('panel.php'); ?></div>
    <div class='bee2'></div>
    <div class='path2'></div>

    <div class="ban00">
        <img class='ban01' src='./images/group01.png' alt='' />
        <img class='ban02' src='./images/group02.png' alt='' />
        <img class='ban03' src='./images/group03.png' alt='' />
        <img class='ban04' src='./images/group04.png' alt='' />
    </div>
    <img class='poly29' src='./images/poly29.svg' alt='' />

    <div class='otro'>
        <hr size="8px" width='8%' color="#F2BD2A" style="margin: 0; text-align: left;" />
        <br /><br />
        <span class='cero08'>All Our Packages Come With Our<br />Built-in CRM and Marketing System</span><br /><br />
        <span class='cero10'>A high quality marketing CRM that keeps track of all your projects and goals can cost
            $1000’s, but when you sign up for a Local Digital Buzz package, you get our state of the art CRM completely
            free.<br /><br /><br />

            Our CRM and marketing system helps you keep track of dozens of projects so you know exactly what’s happening
            at each stage of your marketing process. Whether you want to track and analyze open rates and click-through
            rates or check in on how a design project is going, we’ve got you covered.</span><br /><br />
        </span>
        <div class='bee3'></div>
        <div class='path3'></div>

    </div>

    <div class='footer'>
        <span class='cero08'>Choose From Four Pricing Options</span><img class='panelSide' src='./images/panelSide.svg'
            alt='' /><br /><br />
        <span class='cero10'>Our menu of pricing options is flexible and affordable so you can choose the payment plan
            that works for you.<br /><br /><br /><br /><br />
        </span>
    </div>

    <div class='flech'>
        <img class='arrowL' src='./images/arrowL.svg' alt='' /> <img onclick="otraA1()" class='arrowR' src='./images/arrowR.svg' alt='' />
        <br /><br /><br /><br /><br /><br /><br /><br />

        <div class="uno">
            <div class='menu'>
                <span>Strategy</span>
                <span>Services</span>
                <a href="./templete1A.php">Pricing</a>
                <span>Learn</span>
                <span>About</span>
            </div>
        </div>
    </div>

    <div class='templete'>
        <img src='./images/template.png' style="width: 100%" />
    </div>

<script>
    function otraA1() {
        window.location.href = "./templete1A.php";
    }
</script>

</body>

</html>