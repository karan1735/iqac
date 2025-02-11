<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <style>
    .accordion {
        width: 100.;
        margin: 0 auto;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        background: linear-gradient(145deg, #ffffff, #f0f0f0);
    }

    .accordion-item {
        border-bottom: 1px solid #e0e0e0;
    }

    .accordion-item:last-child {
        border-bottom: none;
    }

    .accordion-title {
        padding: 15px;
        background-color: #f8f9fa;
        color: #000000;
        cursor: pointer;
        font-size: 20px;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .accordion-title .arrow {
        transition: transform 0.3s ease;
        font-size: 18px;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        padding: 0 15px;
        background-color: #ffffff;
        color: #333;
        box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .accordion-content p {
        padding: 15px 0;
        line-height: 1.6;
    }

    .accordion-item.active .accordion-content {
        max-height: fit-content;
        /* You can adjust this */
        padding: 15px;
    }

    .accordion-item.active .accordion-title {
        background-color: #ff4c4c;
        color: white;
        box-shadow: 0 4px 10px rgba(255, 76, 76, 0.2);
    }

    .accordion-item.active .arrow {
        transform: rotate(180deg);
    }

    .accordion-item:hover .accordion-title {
        background-color: #ffecec;
        color: #ff4c4c;
    }
    </style>

    <style>
    /* Basic styling for the container */
    .tab-container {
        display: flex;
        flex-direction: column;
        max-width: 100%;
        background: linear-gradient(135deg, #f0f4ff, #e3e9ff);
        border-radius: 5px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    /* Styling the outer tabs */
    .outer-tab-nav {
        display: flex;
        justify-content: space-around;
        background-color: #001465;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .outer-tab-nav button {
        background: white;
        border: none;
        padding: 14px 28px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        border-radius: 5px;
        color: #333;
        box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease, transform 0.2s ease;
    }

    .outer-tab-nav button:hover {
        background: linear-gradient(145deg, #b9d0ff, #9fb9ff);
        transform: translateY(-4px);
        box-shadow: 6px 6px 12px rgba(0, 0, 0, 0.2);
    }

    .outer-tab-nav button.active {
        background: linear-gradient(145deg, #5f8fff, #4b7dff);
        color: #fff;
        transform: translateY(0);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.25);
    }

    /* Styling the inner tabs */
    .inner-tab-nav {
        display: flex;
        justify-content: space-around;
        background-color: #001465;
        padding: 5px;
        margin-top: 5px;
        border-radius: 10px;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
    }

    .inner-tab-nav button {
        background: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 14px;
        font-weight: bold;
        border-radius: 8px;
        color: #444;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .inner-tab-nav button:hover {
        background: linear-gradient(145deg, #c7d4ff, #aebfff);
        transform: translateY(-3px);
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.15);
    }

    .inner-tab-nav button.active {
        background: linear-gradient(145deg, #4b7dff, #365bff);
        color: #fff;
        transform: translateY(0);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Styling for the tab content */
    .tab-content {
        display: none;
        padding: 25px;
        border-radius: 12px;
        border: 1px solid #ddd;
        margin-top: 15px;
        background: linear-gradient(145deg, #ffffff, #f9faff);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: opacity 0.4s ease, transform 0.4s ease;
        opacity: 0;
        transform: scale(0.95);
    }

    /* Show the active content with enhanced animation */
    .tab-content.active {
        display: block;
        opacity: 1;
        transform: scale(1);
    }

    /* Adding some color to text within content */
    .tab-content h2 {
        font-size: 24px;
        color: #365bff;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
    }

    .tab-content p {
        font-size: 16px;
        color: #333;
        line-height: 1.6;
    }

    /* Media query for mobile responsiveness */
    @media (max-width: 768px) {

        .outer-tab-nav button,
        .inner-tab-nav button {
            padding: 10px 16px;
            font-size: 14px;
        }

        .tab-content {
            padding: 20px;
        }
    }
    </style>


</head>

<body>
    <header id="header">
    </header>
    <nav id="navMenu">
        <div id="navbar"></div>
    </nav>
    <main>

        <!--content start-->
        <h1>Affiliation and Approvals</h1><br>
        <p>
            Affiliation under a university is a formal process through which academic institutions gain
            recognition
            and accreditation to offer programs and confer degrees that are officially validated by the
            university.
            This affiliation ensures that the educational standards and quality of the affiliated
            institutions align
            with the university's guidelines and regulations. Kongu Engineering College was established
            in the year
            1984, approved by AICTE, New Delhi, and affiliated with Anna University, Chennai. Initially,
            it was
            affiliated with Bharathiar University up to 2000. Subsequently, it was affiliated with Anna
            University
            from 2001. The college was granted autonomous status from 2007 by UGC.</p><br>
        <div class="tab-container">
            <!-- Outer Tab Navigation -->
            <div class="tab-nav outer-tab-nav">
                <button class="tab-link active" onclick="openTab(event, 'tab1', 'outer')">Autonomous</button>
                <button class="tab-link" onclick="openTab(event, 'tab2', 'outer')">AU Affiliation</button>
                <button class="tab-link" onclick="openTab(event, 'tab3', 'outer')">AICTE</button>
            </div>

            <!-- Outer Tab Contents -->
            <div id="tab1" class="tab-content outer-tab-content active">
                <h4 class="heading">Autonomous</h4>
                <p align="left"> Kongu Engineering College autonomous status valid upto
                    2032-2033 [<a href="docs/autonomous/KEC_autonomous_approval_23-33.pdf" target="_blank">Download</a>]
                </p>
                <p align="left"> Kongu Engineering College autonomous status valid upto
                    2022-2023 [<a href="docs/autonomous/KEC_autonomous_approval.pdf" target="_blank">Download</a>]
                </p>
                <p align="left"> Kongu Engineering College autonomous status valid upto
                    2012-2013 [<a href="docs/autonomous/KEC_autonomous_approval1.pdf" target="_blank">Download</a>]
                </p>


            </div>

            <div id="tab2" class="tab-content outer-tab-content">
                <h4 class="heading">Anna University Affiliation</h4>
                <h5> Affiliation Orders: </h5>
                <a name="_GoBack"></a>
                <table class="table table-stripped" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> Sl.No. </p>
                            </td>
                            <td width="583" valign="top">
                                <p align="center"> Particulars </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 1 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/2023-2024.pdf">Anna
                                        University Affiliation order
                                        for
                                        the year 2023-24</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 2 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/2022-2023.pdf">Anna
                                        University Affiliation order
                                        for
                                        the year 2022-23</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 3 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/11..20AU.20affiliation.202021-2022.pdf">Anna
                                        University Affiliation order for the year
                                        2021-22</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 4 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/10..20AU.20affiliation.202020-2021.pdf">Anna
                                        University Affiliation order for the year
                                        2020-21</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 5 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/9..20AU.20Affiliation.202019-2020.pdf">Anna
                                        University Affiliation order for theyear 2019-20</a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 6 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/8..20AU.20Affiliation.202018-2019.pdf">Anna
                                        University Affiliation order for the year
                                        2018-19</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 7 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/7..20AU.20Affiliation.202017-2018.pdf">Anna
                                        University Affiliation order for the year
                                        2017-18</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 8 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/6..20AU.20affiliation.202016-2017.pdf">Anna
                                        University Affiliation order for the year
                                        2016-17</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 9 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/5..20AU.20Affiliation.202015-2016.pdf">Anna
                                        University Affiliation order for the year
                                        2015-16</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 10 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/4..20AU.20Affiliation.202014-2015.pdf">Anna
                                        University Affiliation order for the year
                                        2014-15</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 11 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/3..20AU.20Affiliation.202013-2014.pdf">Anna
                                        University Affiliation order for the year
                                        2013-14</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 12 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/2..20AU.20Affiliation.202012-2013.pdf">Anna
                                        University Affiliation order for the year
                                        2012-13</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 13 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs\university\1..20AUT.20affiliation.202011-2012.pdf">Anna
                                        University Affiliation order for the year
                                        2011-12</a></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p align="left"> </p>
                <h5> Permanent Affiliation Orders: </h5>
                <table class="table table-stripped" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> Sl.No. </p>
                            </td>
                            <td width="583" valign="top">
                                <p align="center"> Particulars </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 1 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/P1..20Permanent.20affiliation.202011-2012.pdf">Permanent
                                        Affiliation order 2011-2012</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 2 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/P2..20Permanent.20affiliation.202012-2013.pdf">Permanent
                                        Affiliationorder 2012-2013</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 3 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/P3..20Permanent.20Affiliation.202013-2014.pdf">Permanent
                                        Affiliation order2013-2014</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 4 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a
                                        href="docs/university/P4..20Permanent.20Affiliation.202013-14.20-.2010.20Courses.pdf">Permanent
                                        Affiliation order 2013-2014 10 courses BE EIE MTS
                                        BTECH IT ME MTECH</a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 5 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a
                                        href="docs/university/P5..20Permanent.20Affiliation.20M.E..20MTS.20-.202014-15.pdf">Permanent
                                        Affiliation order 2014-2015 ME MTS</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 6 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a
                                        href="docs/university/P6..20Permanent.20affiliation.20for.20BTECH.20FT.20from.202016-2017.pdf">Permanent
                                        Affiliation order 2016-2017 BTECH FT</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 7 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a href="docs/university/p7.Renaming_Mechatronics Engineering.pdf">Permanent
                                        Affiliation order 2018-2019 Renaming of MTS</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 8 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a
                                        href="docs/university/P7..20Permanent.20Affiliation.20ME.20Structural.20and.20ME.20Embedded.202019-2020.pdf">Permanent
                                        Affiliation order 2019-2020 ME Structural and ME
                                        Embedded 2019-2020</a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="73" valign="top">
                                <p align="center"> 9 </p>
                            </td>
                            <td width="583" valign="top">
                                <p><a
                                        href="docs/university/P8..20Permanent.20Affiliation.20M.Tech.20Food.20Tech.20.202020-2021.pdf">Permanent
                                        Affiliation M.Tech Food Tech 2020-2021<aa>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="tab3" class="tab-content outer-tab-content">
                <!-- Inner Tab Navigation -->
                <div class="tab-nav inner-tab-nav">
                    <button class="tab-link active" onclick="openTab(event, 'ENG', 'inner')">E&T</button>
                    <button class="tab-link" onclick="openTab(event, 'MBA', 'inner')">MBA</button>
                    <button class="tab-link" onclick="openTab(event, 'MCA', 'inner')">MCA</button>
                </div>

                <!-- Inner Tab Contents -->
                <div id="ENG" class="tab-content inner-tab-content active">
                    <div class="col-sd-12 full_page">
                        <h4 class="heading">AICTE Approvals for Engineering and Technology</h4>
                        <!--  Content HERE-->

                        <table class="table">
                            <tbody>
                                <tr>
                                    <td valign="top">
                                        <p align="center">Sl. No.</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">Name of the Course</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">Sanctioned Intake</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">AICTE Approval No. with Date</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">Date of AICTE approval</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">Period of Approval</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 01.</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">30</p>
                                    </td>
                                    <td valign="top">
                                        <p><a href="docs/aicte_approvals/E&amp;T-001-1993-94.20FIRST.20APPROVAL.20OF.20THE.20COLLEGE.20(E&amp;T).2019.04.1993.20001.pdf"
                                                target="_blank">
                                                F.No. 45-46/91-AICTE/586</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">19.04.1993</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">1992-1994</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 02</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a href="docs/aicte_approvals/E&amp;T-002-1993-94.20ext.20of.20.20APPROVAL.2028.10.1993.pdf"
                                                target="_blank">
                                                F.No. 45-46/91-AICTE/9532</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 28.10.1993 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1993-1994 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 03</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-003-1994-95-96.20EXT.20OF.20APPROVAL.2017.04.1994.pdf">
                                                F.No. 2-15/BIII/RC(M)/93</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 17.04.1994 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1994-1997 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 04</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-004-1994-95.20APPROVAL.20of.20CHEM.20&amp;.20EEE.2012.08.1994.pdf">
                                                F.No. 732-50-10/RC/94</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 12.08.1994 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1994-1995 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 05</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-005-1995-97.20ext.20OF.20APPROVAL.2005.06.1995.pdf">
                                                F.No. 730-52-230/RC/94</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 05.06.1995 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1995-1997 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 06</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 to 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-006-1996-97.20increase.20in.20intake.20OF.20CSE.2030.20to.2060.20.2007.06.1995.pdf">
                                                F.No. 730-52-230/RC/94</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 07.06.1995 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1996-1997 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 07</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-007-1996-99.20ext.20of.20approval.2008.04.1996.pdf">
                                                F.No. 730-52-230(E)/ET/96</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 08.04.1996 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1996-1999 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech.Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">40</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 08</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 to 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-008-1996-99.20increase.20in.20intake.20OF.20EEE.2040.20to.2060.2024.05.1996.pdf">
                                                F.No. 730-52-230(E)/ET/96 </a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 24.05.1996 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1996-1999 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 09</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-009-1996-97.20approval.20OF.20ME.20ED.2014.11.1996.pdf">
                                                F.No.441/TND-93/E&amp;T(PG)/92</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 14.11.1996 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1996-1997 </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top">
                                        <p align="center"> 10</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Electronics and Instrumentation Engineering </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-010-1997-99.20approval.20of.20EIE.20.2029.08.1997.20.pdf">
                                                F.No. 730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 29.08.1997 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1997-1999 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 11</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech Information Technology </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-011-1998-99.20approval.20of.20IT.2009.06.1998.pdf">
                                                F.No. 730-52-230(E)/ ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 09.06.1998 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1998-1999 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 12</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-012-1999-2002.20EOA.20&amp;.20INCREASE.20IN.20INTKAE.20.20OF.20EIE,.20IT.20AND.20NEW.20COURSE.20MTS.2029.06.1999.pdf">
                                                F.No. 730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 29.06.1999 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1999-2002 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 to 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 to 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 13</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-013-1999-2000.20APPROVAL.20OF.20ME.20CSE.2025.08.1999.pdf">
                                                F.No.441/TND-93/BOS(PG)/92</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25.08.1999 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 1999-2000 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 14</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-014-2000-2001.20EOA.20&amp;.20INCREASE.20IN.20INTAKE.20OF.20ECE.20CSE.20IT.20FROM.2060.20TO.2090.2014.11.2000.pdf">
                                                F.No. 730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 14.11.2000 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2000-2001 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 to 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 15</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-015-2001-2003.20EOA.20AND.20INCREASE.20IN.20INTKAE.20OF.20CSE.2090.20TO.20120.2022.06.2001.pdf">
                                                F.No. 730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 22.06.2001 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2001-2003 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 16</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Elcetronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-016-2002-2003.20APPROVAL.20OF.20ME.20AE.2008.02.2002.pdf">
                                                F.No. XVII-AIBPG/APP-1602/ET/2001</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 08.02.2002 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2002-2003 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 17</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30 to 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-017-2002-2005.20EOA.20&amp;.20INCREASE.20IN.20INTAKE.20OF.20ECE.2090.20TO.20120,.20CIVIL.2030.20TO.2060.pdf">
                                                F.No. 730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 19.06.2002 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2002-2005 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication</p>
                                        <p> Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 to 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-018-2002-2003.20INCREASE.20IN.20INTAKE.20OF.20ME.20CSE.20&amp;.20ED.2018.20TO.202529.08.2002.pdf">
                                                F.No. 441/TND-93/E&amp;T(PG)/92</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 29.08.2002 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2002-2003 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 to 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 19</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-019-2003-05.20APPROVAL.20OF.20ME.20CONST.20ENGG.20AND.20MGMT.2027.03.2003.pdf">
                                                F.No. 07/05/TN/PG/2002/CIVIL-19</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 27.03.2003</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2003-2005 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 20</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD/CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-020-2003-2005.20APPROVAL.20OF.20ME.20CAD.20CAM.2007.07.2003.pdf">
                                                F.No.PG/TN/ME/MECH/2003/57</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 07.07.2003</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2003-2005 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 21</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-021-2003-2005.20APPROVAL.20OF.20ME.20CHEMICAL.20Engg.20.2007.07.2003.pdf">
                                                F.No.PG/TN/M.TECH/CHEM/2003/75</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 07.07.2003</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2003-2005 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 22</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-022-2003-2005.20APPROVAL.20OF.20ME.20VLSI.2025.08.2003.pdf">
                                                ECE F.No. Nil</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25.08.2003</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2003-2005 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 23</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-023-2003-2005.20EXT.20OF.20APPROVAL.20ME.20ED.20CSE.20CEM.2021.08.2003.pdf">
                                                F.No. 441/TND-93/E&amp;T(PG)/92</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 21.08.2003</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2003-2005 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 24</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-024-2004-2006.20APPROVAL.20OF.20ME.20ME.20MECHATRONICS.2022.07.2004.pdf">
                                                F.No.PG/TN/M.E/2004/MECH-50/75</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 22.07.2004</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2004-2006 </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top">
                                        <p align="center"> 25</p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech Chemical Engineering</p>
                                        <p> (Change of Nomenclature M.Tech. Chemical Engineering instead of M.E.
                                            Chemical Engineering)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> --- </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-025-2003-2005.20CHANGE.20OF.20NOMENCLATURE.20ME.20TO.20MTECH.20Chemical.2021.12.2004.pdf">
                                                F.No.255-50/PG/TN/2003/186</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 21.12.2004</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2003-2005 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 26</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-026-2005-2006.20EXTENSION.20OF.20APPROVAL.2024.06.2005.pdf">
                                                F.No.730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 24.06.2005</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2005-2006 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD/CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.B.A. (Standalone)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.C.A. (Standalone)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 27</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 to 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-027-2005-2006.20EOA.20&amp;.20IN.20INTAKE.20OF.20CHEM.2060,.20EEE.20120.20,.20MECH.20120,.20EIE.2060,.20MTS.2060.20.20&amp;.20NEW.20COU.20FT.2019.09.2005.pdf">
                                                F.No.730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 19.09.2005</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2005-2006 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 to 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD/CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.B.A. (Standalone)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.C.A. (Standalone)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 40 to 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 28</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-028-2006-2007.20EXT.20OF.20APPROVAL.20&amp;.20CONDITIONAL.20APPROVAL.20REMOVAL.2024.05.2006.pdf">
                                                F.No.730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 24.05.2006</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2006-2007 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD/CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.B.A. (Standalone)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.C.A. (Standalone)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>


                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 29</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-029-2007-2008.20EXT.20OF.20APPROVAL.2022.05.2007.pdf">
                                                F.No.730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 22.05.2007</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2007-2008 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD/CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.B.A. (Standalone)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.C.A. (Standalone)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 30</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-030-2007-2008.20EOA.20AND.20INCREASE.20IN.20INTKAE.2060.20TO.20120.2002.07.2007.pdf">
                                                F.No.730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 02.07.2007</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2007-2008 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD/CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 31</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-031-2008-2011.20EXTENSION.20OF.20APPROVAL.2027.05.2008.pdf">
                                                F.No.730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 02.07.2007</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2008-2011 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD/CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 32</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-032-2008-09-2010.20INCREASE.20IN.20INTKAE.20OF.20EIE.20&amp;.20MTS.2060.20TO.20120,.20.20IT.2090.20TO.20120.2023.05.2008.pdf">
                                                F.No.730-52-230(E)/ET/97</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 23.05.2008</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2008-2009 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 90 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top">
                                        <p align="center"> 33</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-033-2010-2011.20EOA.20AND.20APPROVAL.20OF.20ME.20C&amp;I.20COMP&amp;.20COMM.20ENGG.2023.08.2010.pdf">
                                                F.No.Southern Region/1-3589631/2010/EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 23.08.2010</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2010-2011 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B,Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD/CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top">
                                        <p align="center"> 34</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-034-2011-2012.20EOA.20AND.20INCREASE.20IN.20INTAKE.20OF.20MECH,ECE,CSE.20120.20TO.20180.20NEW.20ME.20COMM.20SYS.20&amp;PED.2001.09.2011.pdf">
                                                F.No.Southern/1-401662465/2011/ EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 01.09.2011</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2011-2012 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 to 180 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 to 180 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 to 180 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 35</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-035-2012-2013.20EOA.20AND.20INC.20IN.20MECH.20.20ECE.20CSE.20180.20to.20240.20NEW.20ME.20EMB.20SYS.20&amp;.20STR.20ENGG.2010.05.2012.pdf">
                                                F.No.Southern/1-709413652/2012/ EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 10.05.2012</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2012-2013 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 180 to 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 180 to 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 180 to 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Structural Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Embedded Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 36</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 to 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-036-2013-2014.20EOA.20AND.20INC..20IN.20INTAKE.20CIVIL.20120.20to240.20chem.2060.20to120.20NEW.20MTECH.20FT.20&amp;.20IT.20(CW).2019.03.2013.pdf">
                                                F.No.Southern/1-1345541702/2013/ EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 19.03.2013</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2013-2014 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>

                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 to 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Structural Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Embedded Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> New Course </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology (Information and Cyber warfare)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center"> New Course </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top"><br>
                                        <p align="center"> 37</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a href="docs/aicte_approvals/E&amp;T-037-2014-2015.20EOA.20.202014.pdf">
                                                F.No. Southern/1-2017386438/ 2014/EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 10.06.2014 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2014-2015 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Structural Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Embedded Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology (Information and Cyber warfare)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top"><br>
                                        <p align="center"> 38</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-38-2015-16.20BTECH.20Autonomobile.20EOA.2007.04.20152015.pdf">
                                                F.No. Southern/1-2456278780/ 2015/EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 07.04.2015 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2015-2016 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Automobile Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                        <p align="center"> (New Course) </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Structural Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Embedded Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology (Information and Cyber warfare)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top"><br>

                                        <p align="center"> 39</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/MBA-020-2016-2017.20Extension.20of.20Approval.2025.04.2016.pdf">F.No.
                                                Southern/1-2811168221/ 2016/EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25.04.2016 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2016-2017 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Automobile Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Structural Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Embedded Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology (Information and Cyber warfare)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top"><br>

                                        <p align="center"> 40</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-040-.202017-2018.20EOA.2020.4.2017.pdf">F.No.
                                                Southern/1-3325213637/ 2017/EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 30.03.2017 </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2017-2018 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Automobile Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Structural Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Embedded Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology (Information and Cyber warfare)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18 </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 41</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240</p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-041.20-2018-2019.20EOA.20Corrigendum.204.7.2018.20for.20mechatronics.20engineering.20instead.20MECHATRONICS.pdf">
                                                F.No. Southern/1-3517175928/2018/EOA/Corrigendum-1</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 05.06.2018</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2018-19</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Automobile Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Structural Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Embedded Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology (Information and Cyber warfare)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center"> 42</p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Civil Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240</p>
                                    </td>
                                    <td valign="top">
                                        <p><a
                                                href="docs/aicte_approvals/E&amp;T-042.20-2019-2020.20EOA.2004.05.2019.pdf">
                                                F.No. Southern/1-4262186769/2019/EOA</a></p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 10.04.2019</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 2019-20</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E.Mechanical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>B.E.Electronics and Communication Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 240</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electrical and Electronics Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Electronics and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 120</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.E. Automobile Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Construction Engineering and Management</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Chemical Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> B.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 60</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. CAD CAM</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Computer Science and Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E.Applied Electronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. VLSI Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Control and Instrumentation Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Mechatronics</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Engineering Design</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 25</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Communication Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Power Electronics and Drives</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Structural Engineering</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.E. Embedded Systems</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Food Technology</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p> M.Tech. Information Technology (Information and Cyber warfare)</p>
                                    </td>
                                    <td valign="top">
                                        <p align="center"> 18</p>
                                    </td>
                                    <td valign="top">
                                        <p>&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                    <td valign="top">
                                        <p align="center">&nbsp; </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="50">
                                        43 </td>
                                    <td width="229">
                                        <p> B.E. Civil Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                    <td width="155" rowspan="25" valign="top">
                                        <p align="center"><a href="docs/aicte_approvals/AICTE_Approval_2020-21.pdf">
                                                F.No. Southern/1-7009681891/2020/EOA</a></p>
                                    </td>
                                    <td width="80" rowspan="25" valign="top">
                                        <p align="center"> 15.06.2020 </p>
                                    </td>
                                    <td width="75" rowspan="25" valign="top">
                                        <p align="center"> 2020-21 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E.Mechanical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p>B.E.Electronics and Communication Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Computer Science and Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Electrical and Electronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Electronics and Instrumentation Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Mechatronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Information Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Chemical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Automobile Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E.Construction Engineering and Management </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Chemical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Food Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Computer Science and Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 12 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. VLSI Design </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Control and Instrumentation Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Mechatronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Engineering Design </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Information Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Power Electronics and Drives </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Structural Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 18 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Embedded Systems </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Food Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 18 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> MBA </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> Maser in Computer Application </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                        44</td>
                                    <td width="229">
                                        <p> B.E. Civil Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td width="155" rowspan="25" valign="top">
                                        <p align="center"><a href="docs/aicte_approvals/AICTE_Approval_2021_22.pdf">
                                                F.No. Southern/1-9320413679/2021/EOA</a></p>
                                    </td>
                                    <td width="80" rowspan="25" valign="top">
                                        <p align="center"> 02.07.2021</p>
                                    </td>
                                    <td width="75" rowspan="25" valign="top">
                                        <p align="center"> 2021-22</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E.Mechanical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p>B.E.Electronics and Communication Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Computer Science and Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Electrical and Electronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Electronics and Instrumentation Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Mechatronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Information Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Chemical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Automobile Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E.Construction Engineering and Management </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Chemical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Food Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Computer Science and Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 12 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. VLSI Design </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Control and Instrumentation Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Mechatronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Engineering Design </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Information Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Power Electronics and Drives </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Structural Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 18 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Embedded Systems </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Food Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 18 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> MBA </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> Maser in Computer Application </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> Artificial Intelligence and Machine Learning </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> Artificial Intelligence and Data Science </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> Computer Science and Design</p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>


                                <tr>
                                    <td width="50">
                                        45</td>
                                    <td width="229">
                                        <p> B.E. Civil Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                    <td width="155" rowspan="20" valign="top">
                                        <p align="center"><a href="docs/aicte_approvals/AICTE_Approval_2022_23.pdf">
                                                F.No. Southern/1-9320413679/2022/EOA</a></p>
                                    </td>
                                    <td width="80" rowspan="20" valign="top">
                                        <p align="center"> 07.07.2022</p>
                                    </td>
                                    <td width="75" rowspan="20" valign="top">
                                        <p align="center"> 2022-23</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E.Mechanical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p>B.E.Electronics and Communication Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Computer Science and Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Electrical and Electronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Electronics and Instrumentation Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Mechatronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Information Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Chemical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Automobile Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Food Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Computer Science and Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 12 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. VLSI Design </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Information Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Structural Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 18 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Embedded Systems </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Food Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 18 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> MBA </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> Maser in Computer Application </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Artificial Intelligence and Machine Learning </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Artificial Intelligence and Data Science </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Computer Science and Design</p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                        46</td>
                                    <td width="229">
                                        <p> B.E. Civil Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                    <td width="155" rowspan="25" valign="top">
                                        <p align="center"><a href="docs/aicte_approvals/AICTE_Approval_2023_24.pdf">
                                                F.No. Southern/1-36459492110/2023/EOA </a></p>
                                    </td>
                                    <td width="80" rowspan="25" valign="top">
                                        <p align="center"> 02.06.2023</p>
                                    </td>
                                    <td width="75" rowspan="25" valign="top">
                                        <p align="center"> 2023-24</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Artificial Intelligence and Machine Learning </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Artificial Intelligence and Data Science </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 180 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Chemical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Automobile Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 30 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Computer Science and Design </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 180 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Computer Science and Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Electrical and Electronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p>B.E.Electronics and Communication Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 240 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Electronics and Instrumentation Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Food Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.Tech. Information Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 180 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E.Mechanical Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 60 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> B.E. Mechatronics Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Computer Science and Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. VLSI Design </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 6 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.E. Structural Engineering </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 12 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> M.Tech. Food Technology </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 18 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p> MBA </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                    </td>
                                    <td width="229">
                                        <p>Master in Computer Applications </p>
                                    </td>
                                    <td width="80">
                                        <p align="center"> 120 </p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="MBA" class="tab-content inner-tab-content">
                    <div class="row" style="padding:5px;">
                        <div class="col-sd-12 full_page">
                            <h4 class="heading">AICTE Approvals for MBA</h4>

                            <table class="table" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 1 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A </strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 40 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-001-1994-96.20firt.20approval.2031.03.1994.pdf">
                                                    F.No: 453/BII/BOS( M)/94 23880</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 31.03.1994 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 1994-1995 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 2 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 40 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-002-1996-97-98.20ext.20of.20approval.2007.06.1996.pdf">
                                                    F.No: 431/45-3/MCP(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 13.06.1996 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 1995-1996 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 3 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"><strong> 40 to 60 </strong></p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-003-1996-97.20ext.20of.20approval.20increase.20in.20intkae.2040.20to.2060.2006.11.1996.pdf">
                                                    F.No: 431/45-3/MCP-APR(M)/96</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 06.11.1996 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 1996-1997 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 4 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-004-1998-99.20.20ext.20.20of.20approval.2020.07.1998.pdf">
                                                    F.No: 431/45-3/MCP-(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 20.07.1998 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 1998-1999 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 5 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-005-1999-2000.20ext.20of.20approval.2018.08.1999.20005.pdf">
                                                    F.No: 431/45-3/MCP-(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 18.08.1999 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 1999-2000 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 6 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-006-2000-2003.20EXT.20OF.20APPROVAL.2016.07.2000.pdf">
                                                    F.No: 431/45-3/MCP-(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 16.07.2000 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2000-2001 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 7 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-007-2001-2003.20EXTENSION.20OF.20APPROVAL.2019.06.2001.pdf">
                                                    F.No: 431/45-3/MCP-(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 19.06.2001 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2001-2003 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 8 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-008-2003-2006.20EXTENSION.20OF.20APPROVAL.2007.05.2003.pdf">
                                                    F.No: 431/45-3/MCP-(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 07.05.2003 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2003-2006 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 9 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-009-2005-2006.20EOA.20APPROVAL.20ALONGWITH.20E&amp;T.20APPROVAL.2019.09.2005.pdf">
                                                    F.No&nbsp;: 730-52-230 (E)/ET/97</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 19.09.2005 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2005-2006 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 10 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-010-2006-2007.20EOA.20&amp;.20CONDITIONAL.20APPROVAL.20REMOVED.20STATUS25.05.2006.pdf">
                                                    F.No: 431/45-2/MCP(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 25.05.2006 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2006-2007 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 11 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-011-2007-2008.20EXTENSION.20OF.20APPROVAL.2010.05.2007.pdf">
                                                    F.No: 431/45-2/MCP(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 10.05.2007 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2007-2008 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 12 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"><strong> 60 To 120 </strong></p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-012-2007-2008.20INCREASE.20IN.20INTAKE.20.2060.20TO.20120.2024.08.2007.pdf">
                                                    F.No: 431/45-2/MCP(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 24.08.2007 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2007-2008 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 13 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-013-2008-2009.20extension.20of.20approval.2017.06.2008.pdf">
                                                    F.No: 431/45-2/MCP(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 17.06.2008 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2008-2009 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 14 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-014-2009-2012.20EXTENSION.20OF.20APPROVAL.2002.06.2009.pdf">
                                                    F.No: 431/45-2/MCP(M)/94</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 02.06.2009 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2009-2012 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 15 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-015-2010-2011.20EXTENSION.20OF.20APPROVAL.2023.08.2010.pdf">
                                                    Southern Region/1-10174461/2010/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 23.08.2010 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2010-2011 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 16 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-016-2011-2012.20EXTENSION.20OF.20APPROVAL.2001.09.2011.pdf">
                                                    F.No: Southern/1-428254321/2011/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 01.09.2011 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2011-2012 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 17 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-017-2012-2013.20Extension.20of.20approval.2010.05.2012.pdf">
                                                    F.No: Southern/1-709001562/2012/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 10.05.2012 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2012-2013 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 18 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-018-2013-2014.20Extension.20of.20approval.2019.03.2013.pdf">
                                                    F.No: Southern/1-1406862122/2013/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 19.03.2013 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2013-2014 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 19 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-019-2014-2015.20Extension.20of.20approval.204.6.2014.pdf">
                                                    F.No: Southern/1-2017025665/2014/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 04.06.2014 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2014-2015 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 20 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-019-2015-2016.20Extension.20of.20approval.2007.06.2015.pdf">
                                                    F.No: Southern/1-2454242505/ 2015/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 07.04.2015 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2015-2016 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 21 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-020-2016-2017.20Extension.20of.20Approval.2025.04.2016.pdf">
                                                    F.No: Southern/1-2810903855/2016/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 25.04.2016 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2016-2017 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 22 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-021-2017-2018.20Extension.20of.20Approval.2020.04.2017.pdf">
                                                    F.No: Southern/1-3324836349/2017/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 30.03.2017 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2017-2018 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 23 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A</strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-022-2018-2019.20Extension.20of.20Approval.2021.04.2018.pdf">
                                                    F.No. Southern/1-3517173811/2018/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 04.04.2018 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2018-2019 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45" valign="top">
                                            <p align="center"><strong> 24 </strong></p>
                                        </td>
                                        <td width="88" valign="top">
                                            <p><strong> M.B.A </strong></p>
                                        </td>
                                        <td width="162" valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td width="324" valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/mba/MBA-023-2019-2020.20Extension.20of.20Approval.2004.05.2019.pdf">
                                                    F.No. Southern/1-4262183587/2019/EOA</a></p>
                                        </td>
                                        <td width="174" valign="top">
                                            <p align="center"> 10.04.2019 </p>
                                        </td>
                                        <td width="170" valign="top">
                                            <p align="center"> 2019-2020 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div id="MCA" class="tab-content inner-tab-content">
                    <div class="row" style="padding:5px;">
                        <div class="col-sd-12 full_page">
                            <h4 class="heading">AICTE Approvals for MCA</h4>
                            <!--  Content HERE-->

                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td valign="top">
                                            <p align="center">Sl. No.</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center">Name of the Course</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center">Sanctioned Intake</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center">AICTE Approval No. with Date</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center">Date of AICTE approval</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center">Period of Approval</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 01.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 30 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-001-1995-96.20first.20approval.2016.08.1995.pdf">
                                                    F.No. 411/TN-27/APR(CS)/BOS/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 16.08.1995 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 1995-1996 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 02.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 30 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-002-1996-97.20ext.20of.20approval.2001.07.1996.pdf">
                                                    F.No. TN-27/MCP/APR(CS)/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 01.07.1996 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 1996-1997 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 03.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 30 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-003-1997-98.20ext.20of.20approval.201997-98.2018.06.1997.pdf">
                                                    F.No. 411/TN-27/BOS(CS)/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 18.06.1997 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 1997-1998 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 04.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 30 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-004-1998-99.20ext.20of.20approval.2021.07.1998.pdf">
                                                    F.No. 411/TN-27/BOS(CS)/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 21.07.1998 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 1998-1999 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 05.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 30 to 60 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-005-1998-99.20ext.20of.20approval.20.20&amp;.20increase.20in.20intake.2030.20to.2060.2009.09.1998.pdf">
                                                    F.No. 411/TN-27/APR(CS)/BOS/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 09.09.1998 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 1998-1999 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 06.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-006-1999-2001.20EXT.20OF.20APPROVAL.2016.07.1999.pdf">
                                                    F.No. 411/TN-27/BOS(CS)/95 </a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 16.07.1999 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 1999-2001 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 07.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-007-2001-2002.20EXT.20OF.20APPROVAL.2021.06.2001.pdf">
                                                    F.No. 411/TN-27/BOS(CS)/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 21.06.2001 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2001-2002 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 08.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-008-2002-2005.20EXT.20OF.20APPROVAL.2019.06.2002.pdf">
                                                    F.No. 411/TN-27/BOS(CS)/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 19.06.2002 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2002-2005 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 09.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-009-2005-2006.20EOA.20APPROVAL.20ALONGWITH.20E&amp;T.20APPROVAL.2019.09.2005.pdf">
                                                    F.No.730-52-230(E)/ET/97 </a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 19.09.2005 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2005-2006 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 10.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-010-2006-2007.20EXT.20OF.20APPROVAL.2025.05.2006.pdf">
                                                    F.No.411/TN-27/BOS(CS)/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 25.05.2006 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2006-2007 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 11.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 60 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-011-2007-2008.20EXT.20OF.20APPROVAL.2010.05.2007.pdf">
                                                    F.No.411/TN-27/BOS(CS)/95</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 10.05.2007 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2007-2008 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 12.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center">60 to 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-012-2007-2008.20INCREASE.20IN.20INTAKE.2060.20TO.20120.2024.08.2007.pdf">
                                                    F.No.411/TN-27/BOS(CS)/95 </a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 24.08.2007 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2007-2008 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 13.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-013-2008-2011.20EXT.20OF.20APPROVAL.2008.05.2008.pdf">
                                                    F.No.411/TN-27/BOS(CS)/95 </a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 08.05.2008 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2008-2011 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 14.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-014-2010-2011EXTENSION.20OF.20APPROVAL.2023.08.2010.pdf">No.Southern
                                                    Region/ </a></p>
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-014-2010-2011EXTENSION.20OF.20APPROVAL.2023.08.2010.pdf">1-7351981/
                                                    2010/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 23.08.2010 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2010-2011 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 15.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-015-2011-2012.20EXTENSION.20OF.20APPROVAL.2001.09.2011.pdf">
                                                    F.No.Southern/1-404525611/ 2011/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 01.09.2011 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2011-2012 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 16.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-016-2012-2013.20Extension.20of.20approval.2010.05.2012.pdf">
                                                    F.No.Southern/ 1-708969902/ 2012/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 10.05.2012 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2012-2013 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 17.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA</p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-017-2013-2014.20Extension.20of.20approval.2019.03.2013.pdf">
                                                    F.No.Southern/1-1364281481/ 2013/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 19.03.2013 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2013-2014 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 18.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-018-2014-2015.20Extension.20of.20approval.2004.06.2014.pdf">
                                                    F.No. Southern/1-2017309969/2014/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 04.06.2014 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2014-2015 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 19.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-019-2015-2016.20Extension.20of.20approval.2007.06.2015.pdf">
                                                    F.No. Southern/1-2454396050/ 2015/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 07.06.2015 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2015-2016 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 20.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-020-2016-2017.20Extension.20of.20Approval.2025.04.2016.pdf">
                                                    F.No. Southern/1-2811121697/2016/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 25.04.2016 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2016-2017 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 21.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-021-2017-2018.20Extension.20of.20Approval.2020.04.2017.pdf">
                                                    F.No. Southern/1-3324892934/2017/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 30.02.2017 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2017-2018 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 22.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-022-2018-2019.20Extension.20of.20Approval.2021.04.2018.pdf">
                                                    F.No. Southern/1-3517174181/2018/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 04.04.2018 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2018-2019 </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p align="center"> 23.</p>
                                        </td>
                                        <td valign="top">
                                            <p>MCA </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 120 </p>
                                        </td>
                                        <td valign="top">
                                            <p><a
                                                    href="docs/aicte_approvals/MCA-023-2019-2020.20Extension.20of.20Approval.2004.05.2019.pdf">
                                                    F.No. Southern/1-4262184852/2019/EOA</a></p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 10.04.2019 </p>
                                        </td>
                                        <td valign="top">
                                            <p align="center"> 2019-2020 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
    </main>

</body>
<script>
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
    const title = item.querySelector('.accordion-title');
    title.addEventListener('click', () => {
        const isActive = item.classList.contains('active');

        accordionItems.forEach(i => i.classList.remove('active'));

        if (!isActive) {
            item.classList.add('active');
        }
    });
});
</script>
<script>
function openTab(evt, tabName, tabType) {
    var i, tabcontent, tablinks;

    // Determine which tab set to operate on
    if (tabType === 'outer') {
        tabcontent = document.querySelectorAll('.outer-tab-content');
        tablinks = document.querySelectorAll('.outer-tab-nav .tab-link');
    } else if (tabType === 'inner') {
        tabcontent = document.querySelectorAll('.inner-tab-content');
        tablinks = document.querySelectorAll('.inner-tab-nav .tab-link');
    } else {
        return;
    }

    // Hide all tab contents of the specified type
    tabcontent.forEach(function(content) {
        content.classList.remove('active');
    });

    // Remove 'active' class from all tab links of the specified type
    tablinks.forEach(function(link) {
        link.classList.remove('active');
    });

    // Show the current tab and add 'active' class to the clicked button
    document.getElementById(tabName).classList.add('active');
    evt.currentTarget.classList.add('active');
}

// Optional: Initialize the first tab as active (if not already set in HTML)
document.addEventListener('DOMContentLoaded', function() {
    // Outer Tabs
    var outerActive = document.querySelector('.outer-tab-nav .tab-link.active');
    if (outerActive) {
        var outerTabName = outerActive.getAttribute('onclick').split("'")[3];
        document.getElementById(outerTabName).classList.add('active');
    }

    // Inner Tabs
    var innerActive = document.querySelector('.inner-tab-nav .tab-link.active');
    if (innerActive) {
        var innerTabName = innerActive.getAttribute('onclick').split("'")[3];
        document.getElementById(innerTabName).classList.add('active');
    }
});
</script>

<script>
fetch("folder/accordian.html")
    .then((response) => response.text())
    .then((data) => {
        document.getElementById("accordian").innerHTML = data;
    });
</script>
<script>
// Select all anchor tags within the table
const tableLinks = document.querySelectorAll("table a");

// Loop through each anchor tag and add the target="_blank"
tableLinks.forEach(function(link) {
    link.setAttribute("target", "_blank");
});
</script>

</html>