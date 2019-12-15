<?php
require("config/config.php");
require("lib/db.php");
require("seatcheckmanage/seatcheck_nw_load.php");
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">


    <title>신관 4층</title>
    <meta http-equiv="refresh" content="20">
  </head>
<body id="target">
  <header>
    <h1>재종 주중 4층</h1>
  </header>
  <p>
    <?php
      require("menu/menu.php");
    ?>
  </p>


<div align ="center">
    <table border="1" width="787" align="center">

    <tr height="15" align="right" style="border-bottom: hidden">
      <td colspan="10" style="border-right: hidden">
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary"><a href="/normal_seatcheck_2F.php"></a>2층</button>
          <button type="button" class="btn btn-secondary">4층</button>
          <button type="button" class="btn btn-secondary">5층</button>
        </div>
      </td>
      <td colspan="2">
        <?php
        echo date('Y-m-d');
         ?>
      </td>
    </tr>
    <tr height="5">
      <td colspan = "12" >
    </tr>
    <tr>
      <td style="border-top: hidden; border-bottom: hidden"></td>
      <td class="lateattending">지각예정 오는 중</td>
      <td class="lateattended">지각예정 등원완료</td>
      <td class="absence" style="color:white">결석예정 오늘</td>
      <td class="willabsence">결석예정 미래</td>
      <td style="border-top:hidden; border-bottom: hidden"></td>
      <td class="willgoingout">외출예정</td>
      <td class="goingouting">외출중</td>
      <td class="goingouted">외출완료</td>
      <td class="willearlyout">조퇴예정</td>
      <td class="earlyouting">조퇴</td>
      <td style="border-top: hidden; border-bottom: hidden"></td>
    </tr>
    <tr height="5">
      <td colspan="12"></td>
    </tr>
    <tr>
      <tr>
        <td width="60" >&nbsp;</td>
        <td width="60" id='429' >429 &nbsp;<input type="checkbox"></td>
        <td width="60" id='428' >428 &nbsp;<input type="checkbox"></td>
        <td width="60" id='427' >427 &nbsp;<input type="checkbox"></td>
        <td width="60" id='426' >426 &nbsp;<input type="checkbox"></td>
        <td width="51"  rowspan="50">&nbsp;</td>
        <td width="390" colspan="6" rowspan="10">&nbsp;</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='422' >422</td>
        <td width="60" id='423' >423</td>
        <td width="60" id='424' >424</td>
        <td width="60" id='425' >425</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
    </tr>
    <tr>
        <td width="60" id='421' >421</td>
        <td width="60" id='420' >420</td>
        <td width="60" id='419' >419</td>
        <td width="60" id='418' >418</td>
        <td width="60" id='417' >417</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='413' >413</td>
        <td width="60" id='414' >414</td>
        <td width="60" id='415' >415</td>
        <td width="60" id='416' >416</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
    </tr>
    <tr>
        <td width="60" id='412' >412</td>
        <td width="60" id='411' >411</td>
        <td width="60" id='410' >410</td>
        <td width="60" id='409' >409</td>
        <td width="60" id='408' >408</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='404' >404</td>
        <td width="60" id='405' >405</td>
        <td width="60" id='406' >406</td>
        <td width="60" id='407' >407</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='403' >403</td>
        <td width="60" id='402' >402</td>
        <td width="60" id='401' >401</td>
        <td width="60" id='400' >400</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='396' >396</td>
        <td width="60" id='397' >397</td>
        <td width="60" id='398' >398</td>
        <td width="60" id='399' >399</td>
        <td width="60">&nbsp;</td>
        <td width="60" id='430' >430</td>
        <td width="60" id='431' >431</td>
        <td width="60" id='432' >432</td>
        <td width="60" id='433' >433</td>
        <td width="60">434</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='395' >395</td>
        <td width="60" id='394' >394</td>
        <td width="60" id='393' >393</td>
        <td width="60" id='392' >392</td>
        <td width="60" id='391' >391</td>
        <td width="60" id='439' >439</td>
        <td width="60" id='438' >438</td>
        <td width="60" id='437' >437</td>
        <td width="60" id='436' >436</td>
        <td width="60" id='435' >435</td>
        <td width="60">&nbsp;</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='387' >387</td>
        <td width="60" id='388' >388</td>
        <td width="60" id='389' >389</td>
        <td width="60" id='390' >390</td>
        <td width="60" id='440' >440</td>
        <td width="60" id='441' >441</td>
        <td width="60" id='442' >442</td>
        <td width="60" id='443' >443</td>
        <td width="60" id='444' >444</td>
        <td width="60" id='445' >445</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='386' >386</td>
        <td width="60" id='385' >385</td>
        <td width="60" id='384' >384</td>
        <td width="60" id='383' >383</td>
        <td width="60" id='382' >382</td>
        <td width="60" id='450' >450</td>
        <td width="60" id='449' >449</td>
        <td width="60" id='448' >448</td>
        <td width="60" id='447' >447</td>
        <td width="60" id='446' >446</td>
        <td width="60">&nbsp;</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='378' >378</td>
        <td width="60" id='379' >379</td>
        <td width="60" id='380' >380</td>
        <td width="60" id='381' >381</td>
        <td width="60" id='451' >451</td>
        <td width="60" id='452' >452</td>
        <td width="60" id='453' >453</td>
        <td width="60" id='454' >454</td>
        <td width="60" id='455' >455</td>
        <td width="60" id='456' >456</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='377' >377</td>
        <td width="60" id='376' >376</td>
        <td width="60" id='375' >375</td>
        <td width="60" id='374' >374</td>
        <td width="60" id='461' >461</td>
        <td width="60" id='460' >460</td>
        <td width="60" id='459' >459</td>
        <td width="60" id='458' >458</td>
        <td width="60" id='457' >457</td>
        <td width="60">&nbsp;</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='370' >370</td>
        <td width="60" id='371' >371</td>
        <td width="60" id='372' >372</td>
        <td width="60" id='373' >373</td>
        <td width="60" id='462' >462</td>
        <td width="60" id='463' >463</td>
        <td width="60" id='464' >464</td>
        <td width="60" id='465' >465</td>
        <td width="60" id='466' >466</td>
        <td width="60" id='467' >467</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='369' >369</td>
        <td width="60" id='368' >368</td>
        <td width="60" id='367' >367</td>
        <td width="60" id='366' >366</td>
        <td width="60" id='365' >365</td>
        <td width="60" id='472' >472</td>
        <td width="60" id='471' >471</td>
        <td width="60" id='470' >470</td>
        <td width="60" id='469' >469</td>
        <td width="60" id='468' >468</td>
        <td width="60"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='361' >361</td>
        <td width="60" id='362' >362</td>
        <td width="60" id='363' >363</td>
        <td width="60" id='364' >364</td>
        <td width="60" id='473' >473</td>
        <td width="60" id='474' >474</td>
        <td width="60" id='475' >475</td>
        <td width="60" id='476' >476</td>
        <td width="60" id='477' >477</td>
        <td width="60" id='478' >478</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='360' >360</td>
        <td width="60" id='359' >359</td>
        <td width="60" id='358' >358</td>
        <td width="60" id='357' >357</td>
        <td width="60" id='356' >356</td>
        <td width="60" id='483' >483</td>
        <td width="60" id='482' >482</td>
        <td width="60" id='481' >481</td>
        <td width="60" id='480' >480</td>
        <td width="60" id='479' >479</td>
        <td width="60"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='352' >352</td>
        <td width="60" id='353' >353</td>
        <td width="60" id='354' >354</td>
        <td width="60" id='355' >355</td>
        <td width="60" id='484' >484</td>
        <td width="60" id='485' >485</td>
        <td width="60" id='486' >486</td>
        <td width="60" id='487' >487</td>
        <td width="60" id='488' >488</td>
        <td width="60" id='489' >489</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='351' >351</td>
        <td width="60" id='350' >350</td>
        <td width="60" id='349' >349</td>
        <td width="60" id='348' >348</td>
        <td width="60"></td>
        <td width="60" id='493' >493</td>
        <td width="60" id='492' >492</td>
        <td width="60" id='491' >491</td>
        <td width="60" id='490' >490</td>
        <td width="60"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='344' >344</td>
        <td width="60" id='345' >345</td>
        <td width="60" id='346' >346</td>
        <td width="60" id='347' >347</td>
        <td width="60" id='494' >494</td>
        <td width="60" id='495' >495</td>
        <td width="60" id='496' >496</td>
        <td width="60" id='497' >497</td>
        <td width="60" id='498' >498</td>
        <td width="60" id='499' >499</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='343' >343</td>
        <td width="60" id='342' >342</td>
        <td width="60" id='341' >341</td>
        <td width="60" id='340' >340</td>
        <td width="60" id='339' >339</td>
        <td width="60" id='504' >504</td>
        <td width="60" id='503' >503</td>
        <td width="60" id='502' >502</td>
        <td width="60" id='501' >501</td>
        <td width="60" id='500' >500</td>
        <td width="60"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='335' >335</td>
        <td width="60" id='336' >336</td>
        <td width="60" id='337' >337</td>
        <td width="60" id='338' >338</td>
        <td width="60" id='505' >505</td>
        <td width="60" id='506' >506</td>
        <td width="60" id='507' >507</td>
        <td width="60" id='508' >508</td>
        <td width="60" id='509' >509</td>
        <td width="60" id='510' >510</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='334' >334</td>
        <td width="60" id='333' >333</td>
        <td width="60" id='332' >332</td>
        <td width="60" id='331' >331</td>
        <td width="60" id='330' >330</td>
        <td width="60" id='515' >515</td>
        <td width="60" id='514' >514</td>
        <td width="60" id='513' >513</td>
        <td width="60" id='512' >512</td>
        <td width="60" id='511' >511</td>
        <td width="60"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='326' >326</td>
        <td width="60" id='327' >327</td>
        <td width="60" id='328' >328</td>
        <td width="60" id='329' >329</td>
        <td width="60" id='516' >516</td>
        <td width="60" id='517' >517</td>
        <td width="60" id='518' >518</td>
        <td width="60" id='519' >519</td>
        <td width="60" id='520' >520</td>
        <td width="60" id='521' >521</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='325' >325</td>
        <td width="60" id='324' >324</td>
        <td width="60" id='323' >323</td>
        <td width="60" id='322' >322</td>
        <td width="60"></td>
        <td width="60" id='525' >525</td>
        <td width="60" id='524' >524</td>
        <td width="60" id='523' >523</td>
        <td width="60" id='522' >522</td>
        <td width="60"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='318' >318</td>
        <td width="60" id='319' >319</td>
        <td width="60" id='320' >320</td>
        <td width="60" id='321' >321</td>
        <td width="60" id='526' >526</td>
        <td width="60" id='527' >527</td>
        <td width="60" id='528' >528</td>
        <td width="60" id='529' >529</td>
        <td width="60" id='530' >530</td>
        <td width="60" id='531' >531</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='317' >317</td>
        <td width="60" id='316' >316</td>
        <td width="60" id='315' >315</td>
        <td width="60" id='314' >314</td>
        <td width="60" id='313' >313</td>
        <td width="60" id='536' >536</td>
        <td width="60" id='535' >535</td>
        <td width="60" id='534' >534</td>
        <td width="60" id='533' >533</td>
        <td width="60" id='532' >532</td>
        <td width="60"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='309' >309</td>
        <td width="60" id='310' >310</td>
        <td width="60" id='311' >311</td>
        <td width="60" id='312' >312</td>
        <td width="60" id='537' >537</td>
        <td width="60" id='538' >538</td>
        <td width="60" id='539' >539</td>
        <td width="60" id='540' >540</td>
        <td width="60" id='541' >541</td>
        <td width="60" id='542' >542</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='308' >308</td>
        <td width="60" id='307' >307</td>
        <td width="60" id='306' >306</td>
        <td width="60" id='305' >305</td>
        <td width="60" id='304' >304</td>
        <td width="60" id='547' >547</td>
        <td width="60" id='546' >546</td>
        <td width="60" id='545' >545</td>
        <td width="60" id='544' >544</td>
        <td width="60" id='543' >543</td>
        <td width="60"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='300' >300</td>
        <td width="60" id='301' >301</td>
        <td width="60" id='302' >302</td>
        <td width="60" id='303' >303</td>
        <td width="60" id='548' >548</td>
        <td width="60" id='549' >549</td>
        <td width="60" id='550' >550</td>
        <td width="60" id='551' >551</td>
        <td width="60" id='552' >552</td>
        <td width="60" id='553' >553</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='299' >299</td>
        <td width="60" id='298' >298</td>
        <td width="60" id='297' >297</td>
        <td width="60" id='296' >296</td>
        <td width="60" id='558' >558</td>
        <td width="60" id='557' >557</td>
        <td width="60" id='556' >556</td>
        <td width="60" id='555' >555</td>
        <td width="60" id='554' >554</td>
        <td width="60">&nbsp;</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='292' >292</td>
        <td width="60" id='293' >293</td>
        <td width="60" id='294' >294</td>
        <td width="60" id='295' >295</td>
        <td width="60" id='559' >559</td>
        <td width="60" id='560' >560</td>
        <td width="60" id='561' >561</td>
        <td width="60" id='562' >562</td>
        <td width="60" id='563' >563</td>
        <td width="60" id='564' >564</td>
    </tr>
    <tr class="nonedata">
        <td width="324" colspan="5"></td>
        <td width="390" colspan="6"></td>
    </tr>
    <tr>
        <td width="60" id='291' >291</td>
        <td width="60" id='290' >290</td>
        <td width="60" id='289' >289</td>
        <td width="60" id='288' >288</td>
        <td width="60" id='287' >287</td>
        <td width="60">&nbsp;</td>
        <td width="60" id='568' >568</td>
        <td width="60" id='567' >567</td>
        <td width="60" id='566' >566</td>
        <td width="60" id='565' >565</td>
        <td width="60">&nbsp;</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='283' >283</td>
        <td width="60" id='284' >284</td>
        <td width="60" id='285' >285</td>
        <td width="60" id='286' >286</td>
        <td width="60">&nbsp;</td>
        <td width="60" id='569' >569</td>
        <td width="60" id='570' >570</td>
        <td width="60" id='571' >571</td>
        <td width="60" id='572' >572</td>
        <td width="60" id='573' >573</td>
    </tr>
    <tr>
        <td width="324" rowspan="3" colspan="5">4층 로비</td>
        <td width="51" rowspan="3">
            <p>전면 출입구</p>
        </td>
        <td width="390" colspan="6" height="15"></td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='577' >577</td>
        <td width="60" id='576' >576</td>
        <td width="60" id='575' >575</td>
        <td width="60" id='574' >574</td>
        <td width="60">&nbsp;</td>
    </tr>
    <tr>
        <td width="60">&nbsp;</td>
        <td width="60" id='578' >578</td>
        <td width="60" id='579' >579</td>
        <td width="60" id='580' >580</td>
        <td width="60" id='581' >581</td>
        <td width="60" id='582' >582</td>
    </tr>
</table>
<?php
  require("seatcheckmanage/seatcheck_nw_op.php");
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</body>
</html>
