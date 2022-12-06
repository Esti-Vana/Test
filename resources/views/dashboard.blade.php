<!DOCTYPE html>
<html>
<head>
   <script src='/js/icon.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="css/stylescreen.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <title>dashboard</title>
</head>
<body id="body">
    <div id="data_sum">
        <div class="head">
            <div class="title_head">
                <p class="ttl">Income</p>
                <p class="tag" style="background-color:#313ad7;">Monthly</p>
            </div>
            <div class="data_head">
                <p class="ttl"><span>40 886, 200</span><br />Total income</p>
            </div>
        </div>
        <div class="head">
            <div class="title_head">
                <p class="ttl">Orders</p>
                <p class="tag" style="background-color:#18c1ac; ">Annual</p>
            </div>
            <div class="data_head">
                <p class="ttl"><span>275,800</span><br />New orders</p>
            </div>
        </div>
        <div class="head">
            <div class="title_head">
                <p class="ttl">Visits</p>
                <p class="tag" style="background-color:#0c9428;">Today</p>
            </div>
            <div class="data_head">
                <p class="ttl"><span>106,120</span><br />New visits</p>
            </div>
        </div>
        <div class="head">
            <div class="title_head">
                <p class="ttl">User activity</p>
                <p class="tag" style="background-color:#ed2323;">Low value</p>
            </div>
            <div class="data_head">
                <p class="ttl"><span>80,600</span><br />In first month</p>
            </div>
        </div>
    </div>
    <div id="order_section">
        <div id="order_head">
            <div style="font-size:large;text-align:left;margin-top:1%;margin-left:1%">Orders</div>
            <div id="buttons_order">
                <button class="flex-item">Today</button>
                <button class="flex-item">Monthly</button>
                <button class="flex-item">Annual</button>
            </div>
        </div>
        <div id="order_data">
            <img src="/images/graph1.png" alt="graph_orders" style="width:890px;height:240px" />
            <div>
                <div>
                    <div class="data_head">
                        <div class="ttl"><span>2,436</span><div style="display:grid; grid-template-columns:90%10%"><p>Total orders in period <p>48%</p></div></div>
                    </div>
                    <div style="display: grid; grid-template-columns: 48% 52%; margin-bottom:2%">
                        <div class="bar1" style="background-color:#0c9428;width:200px ;height:6px;"></div>
                        <div class="bar2" style="background-color:#ccbdbd; width:200px ;height:6px;"></div>
                    </div>
                </div>
                <div>
                    <div class="data_head">
                        <div class="ttl"><span>4,422</span><div style="display:grid; grid-template-columns:90%10%"><p>Orders in last month <p>60%</p></div></div>
                    </div>
                    <div style="display: grid; grid-template-columns: 60% 40%; margin-bottom:2%;">
                        <div class="bar1" style="background-color:#0c9428;width:250px ;height:6px;"></div>
                        <div class="bar2" style="background-color:#ccbdbd; width:154px ;height:6px;"></div>
                    </div>
                </div>
                <div>
                    <div class="data_head">
                        <div class="ttl"><span>9,180</span><div style="display:grid; grid-template-columns:90%10%"><p>Monthly income from orders<p>22%</p></div></div>
                    </div>
                    <div style="display: grid; grid-template-columns: 22% 78%;margin-bottom:5%;">
                        <div class="bar1" style="background-color:#0c9428;width:100px ;height:6px;"></div>
                        <div class="bar2" style="background-color:#ccbdbd; width:304px ;height:6px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tables">
        <div style="margin-left:0.7%;">
            <p id="table_msg_title">Messages</p>
            <div id="table_msg_upd">
                <div style="display:grid;grid-template-columns:20%80%;">
                    <i class="material-icons" style="font-size:36px ;margin-top:33%">email</i>
                    <p style="text-align:left ; font-size:x-large"> New messages</p>
                </div>
                <p style="margin-top:-5%;">You have 22 new messages and 16 waiting in draft folder.</p>
            </div>
            <ul style="background-color:white;">
            @foreach ($msgs as $msg)
                <li>
                    <h3>{{$msg['message_title']}}</h3>
                    <p>{{$msg['message_body']}}</p>
                    <p>{{$msg['message_time']}} </p>
                    <hr />
                </li>
            @endforeach
            </ul>

        </div>

        <div id="all_tables">
            <div id="user_list_section">
                <div id="table_user">
                    <div id="user_title">User project list</div>
                    <div style=" background-color: white; ">
                        <table>

                            <tr>
                                <th>Status</th>
                                <th>Date</th>
                                <th>User</th>
                                <th>Value</th>
                            </tr>

                            <tr>
                                <td>Pending</td>
                                <td>
                                    <i class="fa fa-clock-o"></i> 11:20pm
                                </td>
                                <td>Tom</td>
                                <td style="color: #0c9428;">
                                <i class='fas fa-level-up-alt' style=" font-size:13px;"></i>60%
                                </td>
                            </tr>

                            <tr>
                                <td><div class="tag_trans">Canceled</div></td>
                                <td>
                                    <i class="fa fa-clock-o"></i> 11:20pm
                                </td>
                                <td>Agnes</td>
                                <td style="color: #0c9428;">
                                <i class='fas fa-level-up-alt' style=" font-size:13px;"></i>60%
                                </td>
                            </tr>
                            <tr>
                                <td>Pending</td>
                                <td>
                                    <i class="fa fa-clock-o"></i> 11:20pm
                                </td>
                                <td>John</td>
                                <td style="color: #0c9428;">
                                    <i class='fas fa-level-up-alt' style=" font-size:13px;"></i>60%
                                </td>
                            </tr>
                            <tr>
                                <td>Pending</td>
                                <td>
                                    <i class="fa fa-clock-o"></i> 11:20pm
                                </td>
                                <td>Monica</td>
                                <td style="color: #0c9428;">
                                    <i class='fas fa-level-up-alt' style=" font-size:13px;"></i>55%
                                </td>
                            </tr>
                            <tr>
                                <td><div class="tag_trans" style="background-color:#0c9428">Completed</div></td>
                                <td>
                                    <i class="fa fa-clock-o"></i> 11:20pm
                                </td>
                                <td>Agnes</td>
                                <td style="color: #0c9428;">
                                    <i class='fas fa-level-up-alt' style=" font-size:13px;"></i>24%
                                </td>
                            </tr>
                            <tr>
                                <td>Pending</td>
                                <td>
                                    <i class="fa fa-clock-o"></i> 11:20pm
                                </td>
                                <td>Johan</td>
                                <td style="color: #0c9428;">
                                    <i class='fas fa-level-up-alt' style=" font-size:13px;"></i>55%
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="table_list">
                    <div id="user_title">Small TODO list</div>
                    <div id="list">
                        <div class="item-list">
                            <input id="check" type="checkbox" checked="true">
                            <label style="text-decoration: line-through;" class="showOverlay" for="check">Buy a milk </label>
                        </div>
                        <div class="item-list">
                            <input id="check" type="checkbox">
                            <label class="showOverlay" for="check">Go to shop and find some products </label>
                        </div>
                        <div class="item-list">
                            <input id="check" type="checkbox">
                            <label class="showOverlay" for="check">Send documents to Mike </label>
                        </div>
                        <div class="item-list">
                            <input id="check" type="checkbox" checked="true">
                            <label style="text-decoration: line-through;" class="showOverlay" for="check">Go to the doctor </label>
                        </div>
                        <div class="item-list">
                            <input id="check" type="checkbox">
                            <label class="showOverlay" for="check">Plan vacation </label>
                        </div>
                        <div class="item-list">
                            <input id="check" type="checkbox">
                            <label class="showOverlay" for="check">Create new staff </label>
                        </div>
                        <div class="item-list">
                            <input id="check" type="checkbox" >
                            <label class="showOverlay" for="check">Call to Anna for dinner </label>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div id="table_user" style=" margin-top: 2%; ">
                        <div id="user_title"><label>Transactions worldwide</label></div>
                        <div  id="map_table">
                            <table>

                                <tr>
                                    <th>No.</th>
                                    <th>Transaction</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>
                                        Security doors
                                    </td>
                                    <td>10 Jun 2014</td>
                                    <td><div class="tag_trans">$483</div></td>

                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        Wardrobes
                                    </td>
                                    <td>10 Jun 2014</td>
                                    <td><div class="tag_trans">$237</div></td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Set of tools
                                    </td>
                                    <td>10 Jun 2022</td>
                                    <td><div class="tag_trans">$550</div></td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        Panoranic pictures
                                    </td>
                                    <td>15 April 2000</td>
                                    <td><div class="tag_trans">$125</div></td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        Phones
                                    </td>
                                    <td>10 Jun 2006</td>
                                    <td><div class="tag_trans">$483</div></td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Monitors</td>
                                    <td>12 April 2019</td>
                                    <td><div class="tag_trans">$463</div></td>

                                </tr>
                            </table> 
                            <img src="/images/map.png" alt="map" style="width:101%;height:90%;" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>