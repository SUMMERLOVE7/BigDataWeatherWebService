<Html>
    <Head>
        <Title>
            Delete UV Data
        </Title>
        <link rel="stylesheet" href="./home.css">
    </Head>
    <Body>
        <?php
            include_once ("login.php");
            $deleteday = $_POST["deletedate"];
            $deleteregion = $_POST['deleteregion'];

            if(isset($deleteday) && isset($deleteregion)){
                $sql = "DELETE FROM uvtable where uvdate = '".$deleteday."' and region_code = '".$deleteregion."'";
                $res = mysqli_query($mysqli, $sql); 
                //echo "Successful";
            }
        ?>

    </Body>

</Html>
