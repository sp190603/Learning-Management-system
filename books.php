<?php
include 'dbconnect.php';


$sql = "select * from `books`";
$result = mysqli_query($conn, $sql);
foreach ($result as $data) {
    foreach ($data as $keys => $val) {
        echo $val["bookimg"];
    }
}
?>
<!-- <!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
</head>

<body><div class="v140_413">
        <div class="v140_414">
            <div class="v140_415"></div>
            <div class="v140_416"></div>
            <div class="v140_417"></div>
            <div class="v140_418">
                <div class="v140_419"></div>
                <div class="v140_420"></div>
            </div><span class="v140_421">what would you want to learn ?</span><span class="v140_422">for enterprise</span><span class="v140_423">students</span><span class="v140_424">For University</span>
            <div class="v140_425">
                <div class="v140_426">
                    <div class="v140_427"></div>
                </div>
            </div>
            <div class="name"></div>
        </div>
        <div class="v141_955">
            <div class="v140_536">
                <div class="v140_537">
                    <div class="v140_538"></div>
                    <div class="v140_539"></div>
                </div>
            </div>
        </div><span class="v140_535">Recommended books for you</span>
        <?php
        foreach ($result as $data) {
            foreach ($data as $keys =>$val) {?>
        <div class="v141_954">
                        <div class="v140_540">
                        <div class="v140_541">
                            <div class="v140_542"></div>
                            <div class="v140_543">
                            </div>
                        </div>
                        <div class="v140_575"><img alt="" src="<?php echo $val["bookimg"]?>" /></div><span class="v140_576"><?php echo $val["bookname"]?></span><span class="v140_577"><?php echo $val["bookdesc"]?></span>
                    </div>
                    <?php
            }
        }?>
        </div>
    </div>
</body>

</html> <br /><br />
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-size: 14px;
    }

    .v140_413 {
        width: 100%;
        height: 1024px;
        background: rgba(20, 22, 46, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_414 {
        width: 100%;
        height: 79px;
        background: url("../images/v140_414.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_415 {
        width: 100%;
        height: 79px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 1px solid rgba(224, 224, 224, 1);
        overflow: hidden;
    }

    .v140_416 {
        width: 320px;
        height: 48px;
        background: rgba(255, 253, 253, 1);
        opacity: 1;
        position: absolute;
        top: 13px;
        left: 102px;
        border: 1px solid rgba(189, 189, 189, 1);
        overflow: hidden;
    }

    .v140_417 {
        width: 48px;
        height: 48px;
        background: rgba(20, 22, 46, 1);
        opacity: 1;
        position: absolute;
        top: 13px;
        left: 374px;
        overflow: hidden;
    }

    .v140_418 {
        width: 21px;
        height: 21px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: absolute;
        top: 27px;
        left: 388px;
        overflow: hidden;
    }

    .v140_419 {
        width: 14px;
        height: 14px;
        background: url("../images/v140_419.png");
        opacity: 1;
        position: absolute;
        top: 2px;
        left: 3px;
        border: 2px solid rgba(255, 249, 249, 1);
    }

    .v140_420 {
        width: 3px;
        height: 3px;
        background: url("../images/v140_420.png");
        opacity: 1;
        position: absolute;
        top: 14px;
        left: 15px;
        border: 2px solid rgba(255, 249, 249, 1);
    }

    .v140_421 {
        width: 194px;
        color: rgba(130, 130, 130, 1);
        position: absolute;
        top: 29px;
        left: 135px;
        font-family: Roboto;
        font-weight: Regular;
        font-size: 14px;
        opacity: 1;
        text-align: left;
    }

    .v140_422 {
        width: 89px;
        color: rgba(130, 130, 130, 1);
        position: absolute;
        top: 31px;
        left: 1024px;
        font-family: Roboto;
        font-weight: Bold;
        font-size: 14px;
        opacity: 1;
        text-align: left;
    }

    .v140_423 {
        width: 57px;
        color: rgba(130, 130, 130, 1);
        position: absolute;
        top: 31px;
        left: 1137px;
        font-family: Roboto;
        font-weight: Bold;
        font-size: 14px;
        opacity: 1;
        text-align: left;
    }

    .v140_424 {
        width: 88px;
        color: rgba(130, 130, 130, 1);
        position: absolute;
        top: 31px;
        left: 1209px;
        font-family: Roboto;
        font-weight: Bold;
        font-size: 14px;
        opacity: 1;
        text-align: left;
    }

    .v140_425 {
        width: 88px;
        height: 79px;
        background: url("../images/v140_425.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_426 {
        width: 88px;
        height: 79px;
        background: url("../images/v140_426.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_427 {
        width: 88px;
        height: 79px;
        background: rgba(47, 176, 114, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
    }

    .name {
        color: #fff;
    }

    .v141_955 {
        width: 143px;
        height: 34px;
        background: url("../images/v141_955.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 736px;
        left: 1227px;
        overflow: hidden;
    }

    .v140_536 {
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: absolute;
        top: 9px;
        left: 123px;
        overflow: hidden;
    }

    .v140_537 {
        width: 18px;
        height: 12px;
        background: url("../images/v140_537.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 3px;
        left: 2px;
        overflow: hidden;
    }

    .v140_538 {
        width: 9px;
        height: 12px;
        background: rgba(22, 158, 22, 1);
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 10px;
    }

    .v140_539 {
        width: 9px;
        height: 12px;
        background: rgba(22, 158, 22, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
    }

    .v140_527 {
        width: 113px;
        color: rgba(22, 158, 22, 1);
        position: relative;
        top: 0px;
        left: 0px;
        font-family: Open Sans;
        font-weight: SemiBold;
        font-size: 20px;
        opacity: 1;
        text-align: left;
    }

    .v140_535 {
        width: 609px;
        color: rgba(68, 68, 68, 1);
        position: absolute;
        top: 200px;
        left: 442px;
        font-family: Open Sans;
        font-weight: SemiBold;
        font-size: 32px;
        opacity: 1;
        text-align: center;
    }

    .v141_954 {
        width: 100%;
        height: 377px;
        background: url("../images/v141_954.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 330px;
        right: 0px;
        left: 30px;
        overflow: hidden;
    }

    .v140_540 {
        width: 292px;
        height: 377px;
        background: url("../images/v140_540.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_541 {
        width: 292px;
        height: 377px;
        background: url("../images/v140_541.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_542 {
        width: 292px;
        height: 377px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        box-shadow: 1.0310344696044922px 4.124137878417969px 15px rgba(0.511124312877655, 0.511124312877655, 0.511124312877655, 0.18000000715255737);
        overflow: hidden;
    }

    .v140_543 {
        width: 240px;
        height: 235px;
        background: url("../images/v140_543.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 22px;
        left: 26px;
        overflow: hidden;
    }

    .v140_544 {
        width: 240px;
        height: 235px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        overflow: hidden;
    }

    .v140_545 {
        width: 240px;
        height: 235px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        overflow: hidden;
    }

    .v140_546 {
        width: 278px;
        height: 360px;
        background: url("../images/v140_546.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 63px;
        left: 19px;
        overflow: hidden;
    }

    .v140_547 {
        width: 278px;
        height: 360px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        overflow: hidden;
    }

    .v140_548 {
        width: 278px;
        height: 360px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        overflow: hidden;
    }

    .v140_549 {
        width: 382px;
        height: 421px;
        background: url("../images/v140_549.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 31px;
        left: 51px;
        overflow: hidden;
    }

    .v140_550 {
        width: 382px;
        height: 422px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_551 {
        width: 382px;
        height: 422px;
        background: rgba(242, 245, 247, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px;
        overflow: hidden;
    }

    .v140_552 {
        width: 382px;
        height: 422px;
        background: rgba(242, 245, 247, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 1.0310344696044922px solid rgba(194, 209, 217, 1);
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px;
        overflow: hidden;
    }

    .v140_553 {
        width: 382px;
        height: 422px;
        background: url("../images/v140_553.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .name {
        color: #fff;
    }

    .name {
        color: #fff;
    }

    .v140_560 {
        width: 382px;
        height: 422px;
        background: url("../images/v140_560.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_561 {
        width: 382px;
        height: 422px;
        background: rgba(194, 209, 217, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_562 {
        width: 357px;
        height: 399px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: absolute;
        top: 11px;
        left: 13px;
        overflow: hidden;
    }

    .v140_563 {
        width: 356px;
        height: 398px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 1.0310344696044922px solid rgba(194, 209, 217, 1);
    }

    .v140_564 {
        width: 356px;
        height: 398px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 357px;
        border: 1.0310344696044922px solid rgba(194, 209, 217, 1);
    }

    .v140_565 {
        width: 70px;
        height: 57px;
        background: url("../images/v140_565.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 182px;
        left: 156px;
        overflow: hidden;
    }

    .v140_566 {
        width: 70px;
        height: 57px;
        background: rgba(242, 245, 247, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        overflow: hidden;
    }

    .name {
        color: #fff;
    }

    .name {
        color: #fff;
    }

    .v140_573 {
        width: 27px;
        height: 20px;
        background: rgba(194, 209, 217, 1);
        opacity: 1;
        position: absolute;
        top: 29px;
        left: 12px;
    }

    .v140_574 {
        width: 43px;
        height: 30px;
        background: rgba(194, 209, 217, 1);
        opacity: 1;
        position: absolute;
        top: 18px;
        left: 27px;
    }

    .v140_575 {
        width: 141px;
        height: 234px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 23px;
        left: 75px;
        overflow: hidden;
    }

    .v140_576 {
        width: 261px;
        color: rgba(118, 111, 111, 1);
        position: absolute;
        top: 267px;
        left: 16px;
        font-family: Open Sans;
        font-weight: SemiBold;
        font-size: 16px;
        opacity: 1;
        text-align: center;
    }

    .v140_577 {
        width: 261px;
        color: rgba(142, 142, 142, 1);
        position: absolute;
        top: 304px;
        left: 16px;
        font-family: Open Sans;
        font-weight: Regular;
        font-size: 14px;
        opacity: 1;
        text-align: center;
    }

    .v140_578 {
        width: 96px;
        height: 16px;
        background: url("../images/v140_578.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 341px;
        left: 98px;
        overflow: hidden;
    }

    .v140_579 {
        width: 15px;
        height: 16px;
        background: rgba(254, 203, 28, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
    }

    .v140_580 {
        width: 15px;
        height: 16px;
        background: rgba(254, 203, 28, 1);
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 21px;
    }

    .v140_581 {
        width: 15px;
        height: 16px;
        background: rgba(254, 203, 28, 1);
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 41px;
    }

    .v140_582 {
        width: 15px;
        height: 16px;
        background: rgba(254, 203, 28, 1);
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 61px;
    }

    .v140_583 {
        width: 15px;
        height: 16px;
        background: rgba(254, 203, 28, 1);
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 82px;
        border: 0.5155172348022461px solid rgba(254, 203, 28, 1);
    }

    .v140_584 {
        width: 292px;
        height: 377px;
        background: url("../images/v140_584.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 327px;
        overflow: hidden;
    }

    .v140_585 {
        width: 292px;
        height: 377px;
        background: url("../images/v140_585.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_586 {
        width: 292px;
        height: 377px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        box-shadow: 1.0310344696044922px 4.124137878417969px 15px rgba(0.511124312877655, 0.511124312877655, 0.511124312877655, 0.18000000715255737);
        overflow: hidden;
    }

    .v140_587 {
        width: 240px;
        height: 235px;
        background: url("../images/v140_587.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 22px;
        left: 26px;
        overflow: hidden;
    }

    .v140_588 {
        width: 240px;
        height: 235px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        overflow: hidden;
    }

    .v140_589 {
        width: 240px;
        height: 235px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        overflow: hidden;
    }

    .v140_590 {
        width: 278px;
        height: 360px;
        background: url("../images/v140_590.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 63px;
        left: 19px;
        overflow: hidden;
    }

    .v140_591 {
        width: 278px;
        height: 360px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        overflow: hidden;
    }

    .v140_592 {
        width: 278px;
        height: 360px;
        background: rgba(215, 215, 215, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 0px solid rgba(150, 150, 150, 1);
        overflow: hidden;
    }

    .v140_593 {
        width: 382px;
        height: 421px;
        background: url("../images/v140_593.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 31px;
        left: 51px;
        overflow: hidden;
    }

    .v140_594 {
        width: 382px;
        height: 422px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v140_595 {
        width: 382px;
        height: 422px;
        background: rgba(242, 245, 247, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px;
        overflow: hidden;
    }

    .v140_596 {
        width: 382px;
        height: 422px;
        background: rgba(242, 245, 247, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        border: 1.0310344696044922px solid rgba(194, 209, 217, 1);
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px;
        overflow: hidden;
    }
</style> -->