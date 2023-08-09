
<?php if($_SESSION['id'])
{ ?>
<style>
#navbar {
    display: flex;
    justify-content: flex-end;
    position: sticky;
    top: 0px;
    flex-direction: row-reverse;
}


.item{
    float: left;
}

#navbar ul{
    /* display: flex; */
}

#navbar ul li{
    list-style: none;
    padding: 10px;
    /* padding: 10px 47px 10px 47px; */
    
}

#navbar::before{
    content: "";
    background-color: #1A2226;
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: -2;
    /* opacity: 0.95; */
    
}

#navbar ul li a{
    text-decoration: none;
    color: rgb(156 170 188);
    padding: 10px 47px 10px 47px;
}

#navbar ul li a:hover{
    border: 2px solid  #0DB8DE;
    background-color: #102935;
    box-shadow: 0 0.5em 0.5em -0.4em #0DB8DE var(--hover) ;
    border-radius: 10px;
    transform: translateY(-0.25em);
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  
  .dropdown {
    position: relative;
}

.dropbtn {
    background-color: transparent;
    color: rgb(156, 170, 188);
    padding: 10px 10px;
    font-size: 16px;
    border: none;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #1A2226;
    border: 1px solid #0DB8DE;
    border-radius: 10px;
    top: 100%;
    left: 0;
    z-index: 1;
}

.dropdown-content li {
    padding: 0;
}

.dropdown-content a {
    padding: 10px 10px;
    display: block;
}

.dropdown-content a:hover {
    background-color: #102935;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #102935;
    border: 2px solid #0DB8DE;
    box-shadow: 0 0.5em 0.5em -0.4em #0DB8DE;
    transform: translateY(-0.25em);
}
  
  #orgname{
    margin-left: auto;
    padding: 15px;
    /* margin: auto; */
    margin-top: 10px;
    position: relative;
    color: rgb(156 170 188);
}
</style>
<nav id="navbar">
        <div id="orgname"> ORGANISATION </div>
        <ul>
            <li class="item"><a href="main_page.php">HOME</a></li>
            <li class="item"><a href="main_page.php">SERVICES</a></li>
            <li class="item"><a href="#about">ABOUT</a></li>
            <li class="item"><a href="main_page.php#contact">CONTACT US</a></li>
            <li class="item dropdown">
    <a href="#account" class="dropbtn">My Account</a>
    <ul class="dropdown-content">
        <li><a href="admin.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</li>

        </ul>
    </nav>
<?php
} ?>