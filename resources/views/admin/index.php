<!doctype html>
<html lang="en">

<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="/css/fontawesome-free-5.12.0-web/css/all.min.css">
  <link rel="stylesheet" href="/css/admin.css">
  <link rel="stylesheet" href="/css/bootstrap-4.4.1/bootstrap.min.css">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body >
   <h2 align="center" style="margin-top: 40px;">Analytics</h2>
    <div class="container"><div class="wrapper ">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people_alt</i>
              </div>
              <p class="card-category">Users</p>
              <h3 class="card-title">1,234 people
                
              </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">date_range</i> Last 24 Hours
                </div>
              </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">money</i>
              </div>
              <p class="card-category">Income</p>
              <h3 class="card-title">34,567฿</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        
        
      </div>

      <div class="content">
         <h3>Circulations</h3>
         <input id="datepicker" width="276">
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-4 col-lg-12">
               
                
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-vertical"></line><line x1="137.42857142857144" x2="137.42857142857144" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="234.85714285714286" x2="234.85714285714286" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="332.2857142857143" x2="332.2857142857143" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="429.7142857142857" x2="429.7142857142857" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="527.1428571428571" x2="527.1428571428571" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="624.5714285714286" x2="624.5714285714286" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="722" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 91.2 C 137.429 79.2 137.429 79.2 137.429 79.2 C 234.857 103.2 234.857 103.2 234.857 103.2 C 332.286 79.2 332.286 79.2 332.286 79.2 C 429.714 64.8 429.714 64.8 429.714 64.8 C 527.143 76.8 527.143 76.8 527.143 76.8 C 624.571 28.8 624.571 28.8 624.571 28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="137.42857142857144" y1="79.2" x2="137.43857142857144" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="234.85714285714286" y1="103.2" x2="234.86714285714285" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="332.2857142857143" y1="79.2" x2="332.29571428571427" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="429.7142857142857" y1="64.8" x2="429.7242857142857" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="527.1428571428571" y1="76.8" x2="527.1528571428571" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="624.5714285714286" y1="28.799999999999997" x2="624.5814285714285" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="97.42857142857143" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 97px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="137.42857142857144" y="125" width="97.42857142857143" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 97px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="234.85714285714286" y="125" width="97.42857142857142" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 97px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="332.2857142857143" y="125" width="97.42857142857144" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 97px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="429.7142857142857" y="125" width="97.42857142857144" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 97px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="527.1428571428571" y="125" width="97.42857142857139" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 97px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="624.5714285714286" y="125" width="97.42857142857144" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 97px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                
                
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="717" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="717" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="717" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="717" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="717" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="717" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="68.20833333333333" x2="68.20833333333333" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="124.62499999999999" x2="124.62499999999999" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="181.04166666666666" x2="181.04166666666666" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="237.45833333333334" x2="237.45833333333334" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="293.87499999999994" x2="293.87499999999994" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="350.29166666666663" x2="350.29166666666663" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="406.7083333333333" x2="406.7083333333333" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="463.12499999999994" x2="463.12499999999994" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="519.5416666666666" x2="519.5416666666666" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="575.9583333333334" x2="575.9583333333334" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="632.375" x2="632.375" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="688.7916666666666" x2="688.7916666666666" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="56.416666666666664" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="96.41666666666666" y="125" width="56.416666666666664" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="152.83333333333331" y="125" width="56.41666666666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="209.25" y="125" width="56.41666666666666" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="265.66666666666663" y="125" width="56.41666666666666" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="322.0833333333333" y="125" width="56.416666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="378.5" y="125" width="56.41666666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="434.91666666666663" y="125" width="56.416666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="491.3333333333333" y="125" width="56.416666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="547.75" y="125" width="56.41666666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="604.1666666666666" y="125" width="56.41666666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="660.5833333333333" y="125" width="56.41666666666674" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 56px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title"></h4>Weekly Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                
                
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="125.25" x2="125.25" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="210.5" x2="210.5" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="295.75" x2="295.75" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="381" x2="381" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="466.25" x2="466.25" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="551.5" x2="551.5" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="636.75" x2="636.75" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="722" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="722" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 92.4 C 125.25 30 125.25 30 125.25 30 C 210.5 66 210.5 66 210.5 66 C 295.75 84 295.75 84 295.75 84 C 381 86.4 381 86.4 381 86.4 C 466.25 91.2 466.25 91.2 466.25 91.2 C 551.5 96 551.5 96 551.5 96 C 636.75 97.2 636.75 97.2 636.75 97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="125.25" y1="30" x2="125.26" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="210.5" y1="66" x2="210.51" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="295.75" y1="84" x2="295.76" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="381" y1="86.4" x2="381.01" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="466.25" y1="91.2" x2="466.26" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="551.5" y1="96" x2="551.51" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="636.75" y1="97.2" x2="636.76" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="85.25" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 85px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="125.25" y="125" width="85.25" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 85px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="210.5" y="125" width="85.25" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 85px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="295.75" y="125" width="85.25" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 85px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="381" y="125" width="85.25" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 85px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="466.25" y="125" width="85.25" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 85px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="551.5" y="125" width="85.25" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 85px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="636.75" y="125" width="85.25" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 85px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Monthly Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h3>Customers List</h3>
          <div class="row" align="center">
              
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Customer list</h4>
                  <p class="card-category">Collection of point & total prices per person</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <tr><th>ID</th>
                      <th>Name</th>
                      <th>Total</th>
                      <th>Point</th>
                    </tr></thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Arnon</td>
                        <td>1,234</td>
                        <td> 25</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Phitchayatida</td>
                        <td>895</td>
                        <td>16</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>76 </td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>16</td>
                        <td>2</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
  
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  
  
</body>

</html>