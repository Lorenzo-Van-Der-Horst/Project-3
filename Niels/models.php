<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="substyle.css">
    <title>Model S</title>
</head>
<body>
    <header class="headerContent">
        <nav>
        <?php
            include '../index_nav.php';
        ?>
        </nav>
        <div class="headerInfo">
            <h1 class="carTitle">Model S</h1>
            <div>
                <div class="stats">
                    <div>
                        <div class="bereik">
                            <h2>600 km</h2>
                            <small>Bereik</small>
                        </div>
                    </div>
                    <div>
                        <div class="optrek">
                            <h2>2,1 sec</h2>
                            <small>0-100 km/u*</small>
                        </div>
                    </div>
                    <div>
                        <div class="topSnelheid">
                            <h2>322 km/u</h2>
                            <small>Topsnelheid</small>
                        </div>
                    </div>
                    <div>
                        <div class="vermogen">
                            <h2>1020 pk</h2>
                            <small>Vermogen</small>
                        </div>
                    </div>
                    <button class="btnBestel">
                    <a href="../Product_page.php" class="btn-bestel">Bestel nu</a>
                    </button>
                </div>
            </div>
        </div>

    </header>
    <main>
        <!-- Interieur Section -->
        <section class="interieur">
            <div class="mainInt">
                <h1>Interieur van de toekomst</h1>
            </div>
            <table class="mainTable">
                <tr>
                    <td><img class="mainImg" src="https://tesla-cdn.thron.com/delivery/public/image/tesla/180e927c-0542-4428-beb7-1411502fe3bb/bvlatuR/std/1040x584/MS-Interior-Grid-A-Desktop" alt="Connectiviteit Interieur"></td>
                    <td><h2><span>Onafgebroken connectiviteit</span></h2><p>Maak direct verbinding met Bluetooth voor meerdere apparaten <br> of laad apparaten snel op met de draadloze lader of met een USB-C <br> lader met een vermogen van 36 W.</p></td>
                </tr>
                <tr>
                    <td><h2><span>Diep geluid</span></h2><p>Het audiosysteem met 22 luidsprekers, een vermogen van 960 watt en actieve weggeluidsonderdrukking zorgt voor een meeslepende luisterervaring <br> en een geluidskwaliteit van studioniveau.</p></td>
                    <td><video class="mainImg" src="https://tesla-cdn.thron.com/delivery/public/video/tesla/7aa04cc1-863e-4ac6-952e-4ea01457bf47/bvlatuR/WEBHD/MS-Interior-Grid-2-Audio-Desktop"></video></td>
                </tr>
                <tr>
                    <td><img class="mainImg" src="https://tesla-cdn.thron.com/delivery/public/image/tesla/ab165f41-fa4e-4abe-b82a-51bdc295cf42/bvlatuR/std/1040x584/MS-Interior-Grid-D-Desktop" alt="Ruimte Interieur"></td>
                    <td><h2><span>Diep geluid</span></h2><p>Met een kofferbak voor en achter en neerklapbare achterstoelen kunt u <br> uw fiets meenemen zonder het wiel eraf te halen — en ook nog uw bagage.</p></td>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>