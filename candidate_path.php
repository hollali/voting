
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
    <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Party Positions</option>
                <option value = "candidates/pres.php">President</option>
                <option value = "candidates/vp.php">Vice President</option>
                <option value = "candidates/ua.php">General secretary</option>
                <option value = "candidates/ss.php">Information Secretary</option>
                <option value = "candidates/ea.php">Regional Chairman</option>
                <option value = "candidates/tr.php">Treasurer</option>
                <option value = "candidates/vtr.php">Vice Treasurer</option>
                <option value = "candidates/sg.php">Woman's Organizer</option>
                <option value = "candidates/ta.php">General Youth Organizer</option>
                <option value = "candidates/pb.php">Presiding Member</option>
                <option value = "candidates/ac.php">Committee Member</option>
                </select>
            </center>


    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

