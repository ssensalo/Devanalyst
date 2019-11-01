
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>The Development Analyst</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--Main-Stylesheets for the subscription popup-box-->
	<link rel="stylesheet" href="styles.css" />
    <!--<script src="onsubmit_event.js"></script>-->
  

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style rel="stylesheet">
        .data{
            font-size: 13px;
            border-left: 1px solid grey;
        }
        .thead{
            font-size: 15px;
            border-left: 2px solid grey;
            border-radius: 5px;
            padding-bottom: 5px;
        }
       
        .leftborder{
            
        }
         .data-in{
            font-size: 13px;
        }

        /* * {
  box-sizing: border-box;
} */

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 10px;
  /* Should be removed. Only for demonstration */
}
.column-inner {
  float: right;
  width: 50%;
  padding: 10px;
  /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a{
    color: #ffffff;
}
.footer-text h4{
    color: #ffffff;
}
.footer-single h4{
    color: #ffffff;
}
.btn{
    background-color: DodgerBlue; 
    border:none; 
    color:white; 
    padding: 12px 30px; 
    cusor:pointer;
     font-size:20px;
}
.btn:hover{
    background-color: RoyalBlue;
}
/*p{
    color:#0d0d0d;
}*/
    </style>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!--Preloader-->
    <!-- <div class="preloader">
        <div class="spinner"></div>
    </div> -->

    <!-- Mainmenu-Area -->
    <nav class="navbar mainmenu-area" data-spy="affix" data-offset-top="197">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="search-box" class="collapse">
                        <form action="#">
                            <input type="search" class="form-control" placeholder="What do you want to know?">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="navbar-header smoth">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <p class="navbar-brand" href="#home-area"><img src="images/logoNew 1.jpg" alt="" width="150px" height="150px"></p>
                    </div>



                   <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <!-- <li><a href=""><i class="icofont icofont-user-alt-4"></i></a></li> -->
                            <li><a href="#search-box" data-toggle="collapse"><i class="icofont icofont-search-alt-2"></i></a></li>
                            <li class="select-cuntry">
                                <select name="counter" id="counter">
                                    <option value="ENG">Eng</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li class=""><a href="index.php#home-area">Home</a></li>
                            <li class="dropdown active"><a>About</a>
                                <ul class="dropdown-content">
                                
                                    <li><a href="team.php#team-area" style="text-transform: none;">Who we are</a></li>
                                    <li><a href="about.php#about-area" style="text-transform: none;">What we do</a></li>
                                    <li><a href="#footer-area" style="text-transform: none;">Where we are</a></li>
                                    <li><a href="profile.php#profile-area" style="text-transform: none;">Company Profile</a></li>
                                </ul></li>
                            <li><a href="projects.php#projects">Projects</a></li>
                            <li><a href="aid.php#aid-area">Analyst Aid</a></li>
                            <li class="dropdown"><a>Services</a>
                                <ul class="dropdown-content">
                                    <li><a href="hosting.php#service-area" style="text-transform: none;">Web Hosting</a></li>
                                    <li><a href="trainings.php#service-area" style="text-transform: none;">Training</a></li>
                                    <li><a href="stratcomm.php#service-area" style="text-transform: none;">Communication</a></li>
                                    <li><a href="public.php#service-area" style="text-transform: none;">Public Relations</a></li>
                                    <li><a href="services.php#service-area" style="text-transform: none;">Other services</a></li>
                                    <li><a href="services.php#service-area" style="text-transform: none;">Agribusiness</a></li>
                                </ul></li>
                            <li><a href="publish.php">Publications</a></li>
                            <li><a href="contact.php#contact-area">Contact</a></li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area-/ -->


    <!--Header-Area-->
    <header class="header-area overlay" id="home-area">
    
        <div class="vcenter">
            <div class="container">
                <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8"><br /><br /><br /><br />
                        <div class="header-text">
                            <h2 class="header-title wow fadeInUp upper" style="font-size:29px">Strategic Communications &amp; inovative management for an <em style="color:#ff7605;">unpredictable</em> world<span class="dot"></span></h2>
                            <!-- <div class="wow fadeInUp" data-wow-delay="0.5s"><q style="font-size:25px"></q></div> -->
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <a href="contact.php#contact-area" class="bttn bttn-sm bttn-primary">Contact Now</a>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
    </header>
    <!--Header-Area-/-->

    <!-- Contact-Area -->
    <section class="section-padding" id="profile-area">
        <div class="contact-area">
            <div class="container">
               <div class="row">
               <div class="container">
                            <div calss="row">
                                <button class="btn"><i class="fa fa-download"></i><a href="profile.pdf" download> Download Profile</a></button>
                            </div>
                        </div>
                    <div class="col-xs-12 col-md-10">
					<div class="page-title">
                            <h2 class="bar-title wow fadeInUp">Company Profile</h2>
		                  <img src="images/headed.jpg"  alt="John" height="20%" style="width:100%;height:10%"/>

                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.7s" style="text-align:justify;">
                             <div class="col-xs-12 col-sm-6 col-md-12 blog-details">
							 <p><b>Vision:</b> To be the preferred One-Stop Shop provider for Organizational Development, Governance,
                        Capacity building, Public Relations, Communication, and Monitoring and Evaluation Solutions<br />
                        <b>Mission: </b><q>Delivering Professional, results-oriented consultancy excellent in Organizational
                        Development, Good Governance, Strategic and Development Communications, Management,
                        Public relations, Impact Evaluation, Media relations, Rural/Community Development and
                        Capacity Building</q></p>
                        <p>
                        The Development Analyst Ltd is an international organization providing a wide range of
consultancy services to several clients in the Private Sector, Governments and International
Development Agencies.<br/>
It has a Strategic Development Communication and Management Centre (SDCM) that
conducts trainings, abroad study programs and technical support in various fields in conjunction
with institutes within and outside Africa (see appendix 1). The Communication Planning and
Research unit produces quality research for a range of clients, including academics, the
government, non-profit organizations, and businesses. The Centre is a unit of the School of
Journalism and Communication, and communication experts are available to help with research
endeavours in a wide variety of content areas. The goals of the unit are as follows:
<ol>

    <li>To conduct trans-disciplinary, systematic, and innovative research of media and society.</li>
    <li>To understand the interplay of journalism, media, culture, citizens, communication
technology, and democracy.</li>
    <li>To serve as an independent opinion research group that studies attitudes toward the
press, politics, and social issues.</li>
    <li>To serve as a forum for ideas and an important information resource for policymakers,
journalists, scholars, media industries, and public interest organizations through public
opinion research.</li>
</ol>
 </p>
<p>
We focus on sectors like: Good Governance& democracy, Institutional Development, Capacity
building, Strategic and Development Communication, Organizational Assessment and
Development, Governance, Political Monitoring, and Resource mobilization. Our core
competences also cover; Public Relations, Rural Development, Civil Society & NGOs, Education,
Energy, Food Security, Gender, Health, Humanitarian Aid & Emergency, Micro-finance, Poverty Reduction, Procurement, Social Development, Trade, Youth,
Monitoring & Evaluation. Besides, we also offer services in Resource mobilization, Information &
Communication Technology, Communication and Media Agency for Funding agencies and their
portfolio.<br/>
We have worked with Melinda and Bill Gates Foundation, World Bank Group, IDRC, IFAD, EU,
DANIDA, AfDB, AusAid, EBRD, European Commission, EIB, IADB, UNDP,FAO,UNICEF,
UNAIDS,
EAC, International Agroforestry Centre, CABI Nairobi, Association for strengthening Agricultural
Research in East and Central Africa, Ministry of Agriculture, Animal Industry & Fisheries (MAAIF)
and others.
</p>
<p>
Since its inception, The Development Analyst-International’s management has focused on
attracting high quality, professional employees and providing both a challenging and exciting work
environment that allows for creativity, professional growth and opportunity. We carefully select and
employ those individuals that share our passion for our work and dedication and commitment to
excellence. Our Guiding Principles summarize our priorities and corporate philosophy.
<ul>
    <li>We are committed to professional excellence by maintaining the highest standards of
ethical practices and professional integrity</li>
    <li>We are committed to taking on big challenges and finding creative ways to solve complexproblems</li>
    <li>We are committed to exceeding our customers' expectations for quality and responsiveness
by delivering on-time and within budget</li>
    <li>We are committed to creating a working environment that fosters innovation and creativity
that encourages and rewards the entrepreneurial spirit</li>
    <li>We are committed to technical objectivity and will look beyond the walls of our company to
provide the best possible solution for our clients</li>
    <li>We are committed to rewarding hard work, passion for our clients and excellence in our
deliverables; we promote from within and seek to hire the best and brightest employees</li>
    <li>We are committed to technology innovation and market diversification to maintain a
competitive advantage in the marketplace and deliver value to our stakeholders</li>
</ul>
</p>
<p>
<h4>Consultancy</h4>
<p>At The Development Analyst Ltd, we offer integrated advisory and consulting services to
companies, institutions and governments, development partners. We provide our clients with
strategic policies and operating processes and provide international advisory services on:</p>
<ul>
    <li>Organizational Development, Governance, Growth and Poverty Reduction, Rural and
Agricultural Development, Health Systems Strengthening, Water and Sanitation, Monitoring
and Impact Evaluation, Communication, Media and Outreach Strategies.</li>
    <li>Tactical Communications Services (TCS) covering the following areas; Implementation of
Communication Strategies and Public Awareness Campaigns, Design and Production of
Information, Education and Communication materials, Product Education and Awareness
Campaigns, Experiential, and an interactive program for social marketing, Public and Media Relations and Event Planning and Management</li>
    <li>Design and Management of interactive websites</li>
    <li>Gender integration, Monitoring and Evaluation, Training and Capacity building, and
Communications and Knowledge Management.</li>
</ul>
<p>These have been applied in a variety of sectors including economic growth, democracy and
governance, infrastructure and natural resource management, health and education. We also have
experience in Business and private sector development, change management in organizations and
drawing up policies and strategies<br/>
All applied in a variety of sectors including Rural development, Agriculture, Health, Water and
Environment, Economic growth, Democracy and Governance, Infrastructure and Natural Resource
management, Climate change and Education</p>
</p>
<p>
<h4>Capacitating</h4>
<p>The Development Analyst Ltd has a comprehensive experience in training and in know-how
transference within the field of Organizational Development, Governance, Communication, Public
Relations and Outreach Campaigns, Information and Communication Strategies, Organizational
and Change management, Project Development and management, Monitoring, Documentation
and Impact Evaluation, Knowledge Management and Private Sector Development. This
background allows us to constantly perfect the working methods we use in workshops and
seminars, in such a way that they constitute a clear added value. The Detailed Training
programme<br />
Our training services follow these basic principles:</p>
<ul>
    <li>imple concepts, neatly expressed.</li>
    <li>Practical and interactive teaching.</li>
    <li>Logical approaches.</li>
    <li>Analysis of real cases.</li>
    <li>Debates, tests and questions.</li>
    <li>To provide the participants a ''tool box''</li>
</ul>
</p>
<p>
<h4>Technical Assistance</h4>
<p>The Development Analyst Ltd actively works in providing technical assistance to emerging and
developing countries in all phases of the project cycle.</p>
<ul>
    <li>Organizational Development</li>
    <li>Governance</li>
    <li>Agriculture, Food, Nutrition</li>
    <li>Communication Research and Planning</li>
    <li>Development, Execution and Monitoring and Impact evaluation of Strategic
Development and Project Communication programmes.</li>
    <li>Planning and Execution of Public and Media Relations</li>
    <li>Media Research, Planning and Execution</li>
    <li>Policy advocacy</li>
    <li>Social Mobilization and Advocacy</li>
    <li>Media Engagement</li>
    <li>Placement and Advertising in Development Analyst regional Publication</li>
    <li>Develop and production of Information Education Communication (IEC) materials</li>
    <li>Design and Management of Interactive Websites</li>
    <li>Development & Implementation Information and Knowledge Management Strategies</li>
    <li>Monitoring, Documentation and Impact Evaluation</li>
    <li>Identification and design of programmes and projects</li>
    <li>Technical and financial implementation of projects and programmes</li>
    <li>Management and running of project management units</li>
    <li>Management of 'framework contracts'</li>
    <li>Intermediate and final evaluation and monitoring</li>
    <li>Change management in organizations</li>
    <li>Drawing up policies and strategies</li>
</ul>
</p>
<p>
<h4>Studies and Research</h4>
<p>The Development Analyst Ltd conducts assessment and research to determine baseline statistics,
customer satisfaction surveys, and Knowledge, Attitude and Practices Assessment, organizational
assessments, political monitoring, documentation and impact studies, as well as developing as a
support tool for our clients. In elaborating studies, The Development Analyst Ltd applies the
following principles:</p>
<ul>
    <li>Precision in the analysis, applying acknowledged methodologies</li>
    <li>Focus on obtaining added value, including conclusions and practical recommendations</li>
    <li>Quality of the final deliverables: studies with useful contents that are easy to comprehend</li>
</ul>
</p>
<p>
<h4>Project Evaluation</h4>
<p>The Development Analyst Ltd is a specialist in evaluating and monitoring programmes and
projects for aiding development. It uses widely verified methodologies that are employed by the
main international donors, focusing on relevance, efficacy, efficiency, sustainability and impact.</p>
<ul>
    <li>Baseline formulation and feasibility studies</li>
    <li>Inventorisation, stock taking</li>
    <li>Organizational Assessments</li>
    <li>Intermediate evaluation</li>
    <li>Project monitoring and follow-up</li>
    <li>Final evaluation</li>
</ul>
</p>
<p>
<h4>Institutional Strengthening</h4>
<p>The Development Analyst Ltd provides assistance for the establishment and development of public
and private institutions aimed at fostering economic and social development.</p>
<ul>
    <li>Organizational Development services</li>
    <li>Capacity Building service</li>
    <li>Governance Monitoring</li>
    <li> Strategic advisory services</li>
    <li>Policy and Advocacy /communication services</li>
    <li>Organisation and structure</li>
    <li>Design and start-up of products and services</li>
    <li>Financing</li>
    <li>Hiring and training of personnel</li>
    <li>Operating systems and processes</li>
    <li>Comparative analyses and benchmarking</li>
    <li>Performance</li>
    
</ul>
</p>
<p>
<h4>Evaluation Project Management</h4>
<p>The Development Analyst Ltd has extensive experience in the integrated management of local,
national and international projects. Our experience includes the management of complex and
multi-country projects with multiple beneficiaries. The Development Analyst Ltd professionals have
an in-depth understanding of the procedures of the main international donors (EU, World Bank,
etc.).</p>
<ul>
    <li>Establishment and management of 'Project Management Units’</li>
    <li>Management of 'framework contracts'</li>
    <li>Grant programmes and competitiveness funds</li>
    <li>Budget support</li>
    <li>Outsourcing of business support services</li>

</ul>
</p>
<!-- <p><h3>Range of Products and Services</h3>
Our approach recognizes the fact that each Client’s needs are different. We therefore tailor
solutions to meet specific client’s needs. What makes our approach stand out is that we do- not
operate as passive solution providers- but take active involvement in the projects we handle.
‘We believe that sensitizing the people in their local settings and having them
try out the very products onto which these sensitizations programs are based
is the best way to demonstrate value and cause positive behavioural change.’
</p>
<p>
<h4>Organizational Development Consultancy</h4>
We offer various Organizational Development services including development. We provide a
systematic approach to identification of capacity gaps, setting priorities, developing a capacity
building plan which defines monitoring and evaluation indicators, execution and complying the
quality measures. Depending on organizational needs the Capacity Building implementation
process takes seven major steps and duration may be determined by several factors;
organizational nature, culture, environment, level of development, structures and capacity of its
leadership. The seven steps include:
<ol>
    <li>Organizational Capacity Assessment (OCA)</li>
    <li>Prioritization</li>
    <li>Customized Capacity Building plan</li>
    <li>Execution</li>
    <li>Quality Management</li>
    <li>M&E</li>
    <li>Wean off or restarting the process</li>
</ol>
</p>
<p>
<h4>Governance Accountability</h4>
We offer various Governance services including political monitoring. We gather and communicate
accurate and action-oriented development and human rights information globally. We develop
policy advocacy strategies and plans for various campaigns. We campaign for meaningful policy,
development and human rights change; enable effective human rights activism and work to
persuade governments and other actors to uphold universal human rights standards, rule of law
and promote genuine democracy. We provide strategic leadership, support and advice to different
government on Governance issues (Consultancies undertaken for details).
</p>
<p>
<h4>Public Relations Consultancy</h4>
We offers various communication and public relations support services including development
and implementation of communication strategy, public awareness campaigns, organization of
press conferences and other media events, development, planning, implementation and review of
company public relations/media programs, media relations, public relations training for corporate
clients and sourcing of Our experience in this respect includes working with governments, donor funded authorities
and private sector companies to design and implement public awareness campaigns at
national and regional level. Under PR consulting Services we offer the following areas of
expertise
</p>
<p>
<h4>Media Buying</h4>
The Development Analyst handles the placement of all media advertising on behalf of clients
at no extra cost. Under specialized services we offer the following:
<ul>
    <li>Origination of media program in both electronic (radio and TV) and print.
</li>
    <li>Media Origination (Design) of all your advertising material at
subsidized rates.</li>
    <li>Better Advertising Rates - Our experienced media buyers are able to negotiate better
rates for clients.</li>
    <li>Smarter Buying Options - Because we track the media both for impact and cost, we are
able to recommend to clients cost-effective ways to use their ad-spend.</li>
    <li>Streamlined accounts settlement procedure - Clients do not have to deal with numerous
individual media. Vantage Communications receives all bills, crosschecks them for
completeness and submits one bill to the client for settlement at regular pre-agreed
intervals.</li>
</ul>
</p>
<p>
<h4>Production of Communications Tools and Related Consultancy</h4>
For companies producing various publications, The Development Analyst provides various
production consulting services including research, conceptualization, filming, editorial and writing
Media Buying
services, photography, compilation, translation, design, layout and printing. Depending on the
client’s needs, we are able to commission, video production, radio program, experienced writers,
photographers, and designers to research and write complete works. Our staff can edit and enhance drafts prepared by a client,
obtain the right photographs, and oversee the design and production of various tools including
VCD/DVD, CD ROMs, print materials like brochures, flyers, poster, Billboards, annual reports and
newsletters to mention a few. We can also guide you on the best paper to use, the printing inks to
demand from your printer etc.
</p>
<p>
<h4>Business Support Services</h4>
The Development Analyst has set up a business support service to cater mainly for businesses that are
looking to develop supply relationships internationally.
Our business support services attempt to reduce transaction costs, improve learning processes
and build the capacity of local entrepreneurs to export competitively to international markets. We
offer a special support service for international visitors coming to Uganda for business or related
purposes.
a) For International Business People
<ul>
    <li>Business Liaison Support services for foreign buyers looking to develop business contacts
in Uganda.</li>
    <li>Arranging itineraries, airport transfers, and in-country transportation and hotel bookings for
foreign buyers on prospective visits to Uganda.</li>
    <li>Securing appointments with key political and business leaders in line with objectives
of the visit.</li>
    <li> Product Research</li>
    <li>Supplier Linkages</li>

</ul>
b) For Local Businesses
<ul>
    <li>Export Marketing Strategy and Promotion</li>
    <li>SMEs Meet the Buyer Events</li>
    <li>Arranging for and organizing business presentations and other special</li>
    <li>events Market & Product Research</li>
    <li>Market Linkages</li>
</ul>
</p>
<p>
<h4>Event Planning and Management and Hire of Exhibition Furniture and Equipment</h4>
The Development Analyst has established a reputation as one of Uganda’s leading Event
Managers. Besides managing clients’ events, we also hire out exhibition shell schemes and
furniture as well as various corporate presentation accessories including LCD Projectors, Flip
Charts and Flip Chart Stands, Public Address Systems, Laptops, TV sets, Video Decks, DVD
Players etc.
Some of the events that have been handled by the firm in recent years include:-
<ul>
    <li>The 5th Anniversary for Uganda Communications</li>
    <li>Commission The Annual Employer of the Year Awards</li>
    <li>(2001 and 2002) The Business Journalism Awards
(2003)</li>
    <li>The Uganda Business to Business Exhibition (2003 and
2004)</li>
    <li>The Ideal Home Show (2003)</li>
</ul>
The Development Analyst provides complete event support services for clients holding exhibitions,
conferences, seminars, product launches and anniversaries. We offer a range of services designed
to help companies make their events more rewarding. As part of our exhibition support services,
we can also manage entire exhibitions or events on behalf of the client right from planning the
event to following up sales leads generated by a particular exhibition. In short, we work with clients
to ensure that that their trade shows are as effective and productive as possible.
</p>
<p>
<h4>Supply of Promotional Gift Items</h4>
The Development Analyst is one of Uganda’s leading suppliers of quality promotional gift items at
competitive prices. Whether its diaries, key chains, ball pens, calendars, or t-shirts, we are able to
customize hundreds of items to suit your needs. We supply products that are suitable for every type
of manufacturing, corporate or professional organization, and also for clubs and associations to
help promote and market their products and services. Our items are also ideal as corporate
giveaways at company seminars and conferences, and also as items for resale at fundraising
ceremonies.
</p> -->
<p>
<h3>ABOUT DEVELOPMENT ANALYST INTERNATIONAL STRUCTURE</h3>
<p>The Development Analyst International was set up by three Directors, each with extensive
experience covering the fields of Development Communication, public relations, media relations,
Opinion research, development management and knowledge management. Besides, the Directors
also have extensive experience in monitoring, evaluation, economic development, policy
formulation, project and programme delivery and technology solutions.<br />

The Development Analyst International directors have worked in over 20 countries combined,
covering Africa, Asia, Pacific, Latin America as well as Central Asia and Eastern Europe.
The Company has a team of over 15 highly experienced monitors who are economists, project
designers, social development and other sector specialists all with an interest and passion, for
improved performance, increased impact, transparency and responsible social and economic
investment.<br />

The Development Analyst Ltd and sister Company, Michael & Company Enterprise, has also about
Fifty (50) associate experts world-wide representing a wide range of specializations. They include,
among others, Development Communication, Media Relations, Publishing, Agronomists, Foresters,
Economists, Agricultural Economists, Animal Production Experts, Business Management Experts,
Engineers, Veterinarians, Sociologists, Gender and Youth Experts, Lawyers, Management Specialists,
Environmental Experts, Financial Analysts, Education and Training Experts, Farm Management
Specialists, Medical and Health Experts, Food Technologists, and Fisheries Specialists. Their
qualifications and experiences are summarized below:<br/> </p><em><a href="#" style="color:#4269f5">Details can be found in the downloadable file above<a></em>
</p>
<div class="container">

<div class="row">
<div class="column">
<h3 class="bar-title">Expert</h3>
</div>
<div class="column">
<h3 class="bar-title">Details</h3>
</div>
</div>
<div class="row">
    <div class="column">Prof Barnabas Ocala<br />
Education Management Specialist
Degrees:1956 – 1961: <br />Makerere
University B.A., Dipped (E.A.)
1961 - 1962: Teachers College, Columbia
University M.A. (Developmental Psychology)
1969 - 1971: Teachers College, Columbia</div>
    <div class="column" width="100%">Prof Barnabas is Senior Director and Consultant. He has
accomplished assignments that include, among others;
worked as lecturer for over 30 years in Uganda, Kenya,
Zambia and Lesotho. He has worked as consultant in the
areas: Editor and Technical Writer, Early Childhood Care
and Development, Evaluation of Rockefeller Foundation Education Programmes.
He is professor emeritus with University of Nairobi and
Lesotho.</div>
</div>
<div class="row">
    <div class="column">Hugh Bagnall-Oakeley(PhD)<br/>
Agronomist/Natural Resource Management
Expert
ICRA( International Centre for
development oriented research
in agriculture) 1992; Certificate
of Development Oriented
Research in Agriculture;
MSc Tropical and Sub-Tropical
Horticulture and Crop Science;
University of London (Wye) 1988
– 1989
BSc. (Hons) Agriculture
,University of Wales (Bangor) 1985
– 1988</div>
    <div class="column">Dr. Hugh Bagnall-Oakeley is senior associate
consultant and focal point person in UK –Eastern
Europe. He has accomplished a number of
assignments including, among others; agricultural
and rural sector review, evaluation farm Income
diversification projects, renewable natural resource
management, agricultural productivity, Technology
uptake and technology up scaling, advisory services,
small medium enterprise development, marketing and
supply to market chain development. </div>
</div>
<div class="row">
    <div class="column">Dr. Norrish, Patricia Elizabeth
Development Communications
Specialist & Advocacy Specialist
1990 PhD Typography &Graphic Communication
( Reading)
19980 BA Hons (2:1) Typography & Graphic
Communication ( Reading)</div>
    <div class="column">Dr. Norrish, Patricia Elizabeth is senior associate
consultant and focal point person in UK –Eastern
Europe. She has accomplished a number of
assignments including, among others;
<ul>
    <li>2002; Development of Communication Strategy for
Client Oriented Research and Development Project,
National Agricultural Research Organization (NARO)
Funded by DFID.</li>
    <li>2000-1; Study of the impact of selected Natural
Resources System Programme (NRSP) project
communication activities and media products, NRS
funded by DFID</li>
</ul>
</div>
</div>
<div class="row">
    <div class="column">Mr. Ocilaje Michael<br/>
Technical Director/ Development
Communication Consultant & Science Editor
BSc. (Hons) Agricultural Extension Makerere
University (1992);
MSc. Development Communication, University
Of the Philippines (1997)
Ph.D. Agricultural Extension & Innovative
Studies, Makerere University-Ongoing</div>
    <div class="column">Mr. Ocilaje Michael is the Technical Director and Senior
Consultant. Mr. Ocilaje Michael has 20 years’ experience in
Development Communication, Public relations,
Development Management & Knowledge Management
Expert. He is the technical director responsible for day to
day management of the company programmes in
Communication Strategy Development, Implementation
and monitoring and evaluation, editing, Technical writing.</div>
</div>
<div class="row">
    <div class="column">Baron Oron
B.A (Hons)<br/>
 Literature and Theatre MUK, Dip.
MDD-MUK, Certificates on Gender Based
Violence, Institute Promundo, Brazil
Consultant Ministry of Gender Labor and
Social Development Sara Communication
Initiative.</div>
    <div class="column">Mr. Baron Oron is senior Behavioural Communications
Expert
with The Development Analyst. He has worked as trainer
BCC HIV/AIDS Integrated Model Districts (AIM) and
Program Technical Officer PATH/AYA Uganda. He is
currently consultant with Stepping Stones Communication
and Relationship Manual Africa Region and Principal
Facilitator UNICEF Implementation of Children Statute
through Theatre.
UNICEF Facilitator for Theatre Directors Integration of TFD
approach in problem solving.</div>
</div>
</div>


                             </div>
                        </div>
                        
                </div>
            </div>
        </div>
    </section>

    <!-- Contact-Area / -->
     <div class="section-padding">
     <div class="container">
                <div class="row"><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
     </div>
     </div> 


   <!-- Footer
 ================================================== -->
 <?php include_once("footer-area.php"); ?>
    <!-- Footer-Area / -->

 

      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bars.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/easypiechart.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script>
    <script src="js/maps.js"></script>

    <!--Subsciption popup JS-->
	<script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/list-builder1.js"></script>
</body>

</html>