    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .div-title{
            height:100px;
            border-bottom: solid 1px #e6e0e0;
            margin-bottom:10px;
            padding:20px;            
        }

        .side-menu li{
            list-style: none;
        }
        .form-container{
            padding:10px;
        }
        .section-title{
            font-weight:bold;
            padding:5px;
        }
        .sub-title{
            color:#578be0; 
            font-weight:bold;
        }
        .parenthesis_text{
            color: #7e9cce;
        }
        .table{
            width:95%;
            margin:0 auto;
        }
        .table thead th{
            background-color:whitesmoke;
        }
        .btn{
            margin-top:1em;
        }
    </style>
    <!-- <style>
        /* #side-nav{
            font-size: 20px;
            width:25%;
            height:100%;
            background-color: #44475a;
            color:#f8f8f2;
            float:left;
            margin-right:5px;
        }
        #side-nav-head{
            line-height: 40px;
            width:100%; 
            height: 50px;
            padding: 3px 3px 3px 5px;
            background-color:#346c6c;
        }
        #page-content{
            width:75%;
            height:100%;
            float:right;
        }
        #side-bar ul li{
            list-style: none;
        } */
    body {
        background-color: #fbfbfb;
    }
    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0; /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 2000;
    }

    @media (max-width: 991.98px) {
    .sidebar {
        width: 100%;
    }
    }
    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }
    #main-navbar{
        background-color:#2925b5;
        font-size:30px;
        color:whitesmoke;
    }
    main{
        margin-top: 58px
    }
</style> -->