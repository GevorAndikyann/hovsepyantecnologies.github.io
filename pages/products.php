<?php
include "../layout/header.php";
?>
    <a href="../index.php" id="menu"><h2>Home</h2></a>
</header>
        <section class="sectionForProducts">
            <article class="product1Article">
                <div>
                    <img src="../images/product1.jpg" class="productImg" alt="">
                </div>
                <a href="charencSystem.php##aboutProduct">
                    <input type="button" value="Read More" class="productReadMore">
                </a>
                <a href="charencSystem.php#userData">
                    <input type="button" value="Order" class="productOrder">
                </a>
            </article>
            <article class="product2Article">
                <div>
                    <img src="../images/product2.jpg" class="productImg" alt="">
                </div>
                <a href="">
                    <input type="button" value="Read More" class="productReadMore">
                </a>
                <a href="">
                    <input type="button" value="Order" class="product2Order productOrder">
                </a>
            </article>
            <article class="product3Article">
                <div>
                    <img src="../images/product3.jpg" class="productImg" alt="">
                </div>
                <a href="">
                    <input type="button" value="Read More" class="productReadMore">
                </a>
                <a href="">
                    <input type="button" value="Order" class="product3Order productOrder">
                </a>
<!--                <button class="productOrder">order</button>-->
            </article>
</section>

<!--        <div id="userData">-->
<!--                <i class="fa-solid fa-xmark" id="closedForm"></i>-->
<!--            <form id="DataForm" action="../actions/userRegisterAction.php" method="post">-->
<!--                <input type="text" name="firstname" placeholder="Անուն">-->
<!--                <input type="text" name="lastname" placeholder="Ազգանուն">-->
<!--                <input type="text" name="phone" placeholder="Բջջային հեռախոս">-->
<!--                <input type="email" name="email" placeholder="Էլ. փոստ">-->
<!--                <input type="text" name="address" id="address" placeholder="Փողոց, տուն/շենք, բնակարան">-->
<!--                <input type="text" name ="productName" class ="selectProdType"><br>-->
<!--                <input type="submit" value="Send" class="submitBtn">-->
<!--            </form>-->
<!--        </div>-->

<!--        <footer id="footer">-->
<!--            <div class="footerInfoBox">-->
<!--                <img src="../images/logo.jpg" alt="" />-->
<!--                <h1 align="center">Hovsepyan.am</h1>-->
<!--                <ul>-->
<!--                    <li><h2>Contac us</h2></li>-->
<!--                    <li>+374 77-655-999</li>-->
<!--                    <li>+374 95-655-996</li>-->
<!--                    <li>-->
<!--                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSDXXljmQmwFHjzxNxczdTvtFwkPprhcgPTrHQsBJtNsCHXTXdxNwRBKgDJHvJQGMTmMcjGg" target="_blank">htechnologies2022@gmail.com</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <div class="footer-icons">-->
<!--                    <i class="fa-brands fa-instagram"></i>-->
<!--                    <i class="fa-brands fa-facebook-square"></i>-->
<!--                    <i class="fa-solid fa-envelope"></i>-->
<!--                </div>-->
<!--            </div>-->
<!--        </footer>-->
        <script src="../Js/getdata.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!--    </body>-->
<!--</html>-->

<?php
include ("../layout/footer.php");
?>
