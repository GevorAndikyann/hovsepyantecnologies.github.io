<?php session_start();
include "../layout/header.php";

$_SESSION["productName"]="charencSystem";
?>

<div id="menuLinks">
    <a href="../index.php" id="menu"><h2>Home</h2></a>
    <a href="products.php" id="menu"><h2>Products</h2></a>
</div>

</header>
<section class="sectionForProduct">
    <article class="product1Article">
        <div>
            <img src="../images/product1.jpg" class="productImg" alt="">
        </div>
    </article>
    <article id="aboutProduct">
        <br>
        <h2>Charents Smart Irigation System</h2><br>
        <p>Չարենց խելացի ոռոգման համակարգը ավտոմատ կերպով կատարում է ոռոգումը հաշվի առնելով մի շարք տվյալներ,
            ինչպիսիք են`</p>
            <ul>
                <li>Հողի խոնավությունը ,</li>
                <li>Օդի ջերմաստիճանը ,</li>
                <li>Օդի խոնավությունը ,</li>
                <li>Եղանակային պայմանները ,</li>
                <li>Կուտակված ջրի քանակը ,</li>
                <li>Ոռոգման ցանկալի ժամը .</li>
            </ul>
    </article>
    <p>
        Կառավարվում է հեռախոսի հավելվածի միջոցով, որտեղ նշվում են ցանկալի պարամետրերը տվյալ բույսի համար։
        Համակարգը ունի մինչև 6 խոնավաչափ, որոնք տեղադրվում են տարբեր վայրերում ավելի ճշգրիտ չափումներն իրականացնելու համար։
        Իսկ ջրի առկայության սենսորները աշխատում են առանց տարայի ամբողջականության խախտման։
        Հողի խոնավության սենսորները կարող են լինեն 2 տեսակի՝ երկար և կարճ, որոնք տեղադրվում են տարբեր բույսերի մոտ՝ արմատներին հասնելու համար։
    </p>


</section>


<section id="userData">
    <br>
    <h3>register for order</h3>
    <!--    <i class="fa-solid fa-xmark" id="closedForm"></i>-->
    <form id="DataForm" action="../actions/userRegisterAction.php" method="post">
        <input type="text" name="firstname" placeholder="Անուն">
        <input type="text" name="lastname" placeholder="Ազգանուն">
        <input type="text" name="phone" placeholder="Բջջային հեռախոս" value="+374 <?php echo $_SESSION['dates']["tel"];?>">
        <span class="error"><?php echo $_SESSION['error']['phone']?$_SESSION["error"]["phone"]:'' ?></span>
        <input type="email" name="email" placeholder="Էլ. փոստ">
<!--        <input type="text" name="address" id="address" placeholder="Փողոց, տուն/շենք, բնակարան">-->
        <input type="hidden" name ="productName" class ="selectProdType"><br>
        <input type="submit" value="Send" class="submitBtn">
    </form>
</section>

<?php
unset($_SESSION['dates']["tel"]);
unset($_SESSION['error']);
include "../layout/footer.php";
?>
