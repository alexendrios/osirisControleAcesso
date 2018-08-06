
<style>

    nav{
        background: rgb(0,79,14);
        color: white;
    }
    img {
        width: 5%;
        margin-left: .9%;
        
        
    }
    ul {
       display: inline; 
     
    }
    li {
        display: inline;
    }
    .p{
        text-shadow :0.1em 0.1em 0.1em ;
        padding: 15%
    }
    .p1{
       margin: auto;
       font-size: 125%;
    }
    .p2 {
       margin-left: auto;
       margin-right: auto;
       padding: 15%;
    }
    a {
        color: red;
       
    }

    a:link{
        text-decoration: none;
    }
   
    
</style>
<nav>
    <img src="../img/logo.png" />
    <strong>SISTEMA OSIRIS</strong>
<ul>
    <li class="p">BEM VINDO </li>
    <?php
    if (isset($_SESSION['userName'])) {
        ?> 
    <li class="p1"><?php echo '<strong>' . strtoupper($_SESSION['userName']) . '</strong>' ?></li> 
        <?php
    }
    ?>
    <li class="p2">
        <a class="zoom" href="../service/sair.php?acao=sair">
            Sair ( X )</a>
    </li>
</ul>
</nav>

