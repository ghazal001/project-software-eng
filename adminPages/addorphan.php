 <!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<section class="table__body">
<a href="addneworphan.php" class="btn btn-dark mb-3">Add New</a>
<a href="profileAdmin.php" class="btn btn-dark mb-3">return</a>
            <table>
                <thead>
                    <tr>
                        <!-- <th> From </th>
                        <th> To </th>
                        <th> Schedule </th>
                        <th> available space </th>
                        <th> Show Students</th>
                        <th> Edit</th>
                        <th> Delete</th> -->

                        <th> Name </th>
                        <th> Age </th>
                        <th> gender  </th>
                        <th> Branch name</a></th>
                        <th> ammout</th>
                        <th> description </th>
                        <th> action</th>
                        
                    </tr>

                </thead>
                <tbody>
                    <?php 
                  
                    include('./tabledriver/connection.php');
                    
                    $qsl = "SELECT addorphan.*, branch.name AS branch_name
                    FROM addorphan
                    JOIN branch ON addorphan.branchID = branch.id
                    ";
                    $res = mysqli_query($conn , $qsl);
                    
                    while($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$row['nameorphan']."</td>";
                        echo "<td>".$row['age']."</td>";
                        echo "<td>".$row['gender']."</td>";
                        echo "<td>".$row['branch_name']."</td>";
                        echo "<td>".$row['amount']."</td>";
                        echo "<td>".$row['description']."</td>";
                        echo "<td>
                        <a href=edit.php?id=".$row["idorphan"]." class='link-dark'><i class='fa-solid fa-pen-to-square fs-5 me-3'></i></a>
                        <a href=delete.php?id=".$row["idorphan"]." class='link-dark'><i class='fa-solid fa-trash fs-5'></i></a>
                      </td>";
                      echo "<tr>";
                    }
                    
                    
                    ?>
                </tbody>    
                <style>
                    * {
    margin: 0;
        padding: 0;

        box-sizing: border-box;
        font-family: sans-serif;
    }
    .container {
        background-color: #0c356a !important;
    }

    main.table {
        width: 55vw;
        height: 55vh;
        margin: 30px;
        backdrop-filter: blur(7px);
        box-shadow: 0 .4rem .8rem #0005;
        border-radius: .8rem;
        overflow: hidden;
        background-color: #eee;
    }

    .table__header {
        width: 100%;
        background-color: #fff5;
        padding: .8rem 1rem;

        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .table__header .input-group {
        width: 45%;
        height: 90%;
        background-color: rgb(86, 50, 50);
        padding: 0 .8rem;
        border-radius: 2rem;

        display: flex;
        justify-content: center;
        align-items: center;

        transition: .2s;
    }

    .table__header .input-group:hover {
        width: 25%;
        background-color: #fff8;
        box-shadow: 0 .1rem .4rem #0002;
    }

    .table__header .input-group img {
        width: 1.2rem;
        height: 1.2rem;
    }

    .table__header .input-group input {
        width: 100%;
        padding: 0 .5rem 0 .3rem;
        background-color: transparent;
        border: none;
        outline: none;
    }

    .table__body {
        width: 95%;
        max-height: calc(89% - 1.6rem);
        background-color: #fffb;

        margin: .9rem auto;

        border-radius: .6rem;

        overflow: auto;
        overflow: overlay;
    }

    .table__body::-webkit-scrollbar {
        width: 0.5rem;
        height: 0.5rem;
    }

    .table__body::-webkit-scrollbar-thumb {
        border-radius: .5rem;
        background-color: #0004;
        visibility: hidden;
    }

    .table__body:hover::-webkit-scrollbar-thumb {
        visibility: visible;
    }

    table {
        width: 100%;
    }

    td img {
        width: 36px;
        height: 36px;
        margin-right: .5rem;
        border-radius: 50%;

        vertical-align: middle;
    }

    table,
    th,
    td {
        border-collapse: collapse;
        padding: 1rem;
        text-align: left;
    }

    thead th {
        position: sticky;
        top: 0;
        left: 0;
        background-color: #d5d1defe;

        text-transform: capitalize;
    }

    tbody tr:nth-child(even) {
        background-color: #0000000b;
    }

    tbody tr {
        --delay: .1s;
        transition: .5s ease-in-out var(--delay), background-color 0s;
    }

    tbody tr.hide {
        opacity: 0;
        transform: translateX(100%);
    }

    tbody tr:hover {
        background-color: #fff6 !important;
    }

    tbody tr td,
    tbody tr td p,
    tbody tr td img {
        transition: .2s ease-in-out;
    }

    tbody tr.hide td,
    tbody tr.hide td p {
        padding: 0;
        font: 0 / 0 sans-serif;
        transition: .2s ease-in-out .5s;
    }

    tbody tr.hide td img {
        width: 0;
        height: 0;
        transition: .2s ease-in-out .5s;
    }




    @media (max-width: 1000px) {
        td:not(:first-of-type) {
            min-width: 12.1rem;
        }
    }

    thead th span.icon-arrow {
        display: inline-block;
        width: 1.3rem;
        height: 1.3rem;
        border-radius: 50%;
        border: 1.4px solid transparent;

        text-align: center;
        font-size: 1rem;

        margin-left: .5rem;
        transition: .2s ease-in-out;
    }

    thead th:hover span.icon-arrow {
        border: 1.4px solid #6c00bd;
    }



    thead th.active span.icon-arrow {
        background-color: #6c00bd;
        color: #fff;
    }

    thead th.asc span.icon-arrow {
        transform: rotate(180deg);
    }

    thead th.active,
    tbody td.active {
        color: #6c00bd;
    }

    .export__file {
        position: relative;
    }

    .export__file .export__file-btn {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        background: #fff6 url(images/export.png) center / 80% no-repeat;
        border-radius: 50%;
        transition: .2s ease-in-out;
    }

    .export__file .export__file-btn:hover {
        background-color: #fff;
        transform: scale(1.15);
        cursor: pointer;
    }





    .navbar {

        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        width: 100%;
        justify-content: space-between;
        padding: 20px;
        background-color: #0c356A;



    }

    ul {
        list-style: none;
    }

    .nav-links {
        display: flex;
        align-items: center;


    }

    .navbar .nav-links li {
        background-color: black;
        border-radius: 30px;
        padding: 5px 30px;
        border: 1px solid black;
    }

    .navbar .nav-links li:hover {
        color: white;
        border-radius: 30px;
        border: 1px solid white;
    }

    .nav-links li {
        margin: 0 30px;
        color: white;
        background-color: #0c356A;
        cursor: pointer;

    }

    .nav-links li:hover {
        background-color: #f3cd34;
    }

    .logo {
        color: black;
    }

    .active {
        color: white;

        font-weight: bold;
    }


    @media only screen and (max-width:850px) {
        .menu-btn {
            display: block;
        }

        .navbar {
            padding: 0;
        }

        .logo {
            position: absolute;
            top: 30px;
            left: 30px;

        }

        .nav-links {
            flex-direction: column;
            width: 100%;
            height: 100vh;
            justify-content: center;
            background: #484872;
            margin-top: -900px;
            transition: all 0.5s ease;


        }

        .mobile-menu {
            margin-top: 0px;
            border-bottom-right-radius: 30%;
        }

        .nav-links li {
            margin: 30px auto;
        }
    }

    a {
        text-decoration: none;
    }

    /* profile container css */
    .prof {
        position: absolute;
        right: 0;
    }

    */ .table__body h3 .request {
        background-color: #6fcaea;
    }


    .tripR {
        color: #eee;
        font-size: 1.2em;
        margin-left: 30px;
        font-weight: bold;
        background-color: black !important;
        padding: 2px 10px;
        border-radius: 20px;
        transition: 0.2s;
    }
    .tripR:hover{
        background-color: rgb(100, 100, 66) !important;
    }

                    </style>