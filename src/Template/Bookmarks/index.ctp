<ul class="pagination">
<li><a href="#">#</a></li>
<?php          
  for($i=65;$i<=90;$i++)
  {         
       echo "<li class=\"alpha\"><a href=\"#\">".chr($i)."</a></li>";
  }?>
  <li class="active alpha"><a href="#">All</a></li>
  <li  class="latest"><a href="#">Latest</a></li>
  </ul>




<table id="example" s>
        <thead>
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Tiger</td>
                <td>Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Garrett</td>
                <td>Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ashton</td>
                <td>Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Cedric</td>
                <td>Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Airi</td>
                <td>Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Brielle</td>
                <td>Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Herrod</td>
                <td>Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Rhona</td>
                <td>Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Colleen</td>
                <td>Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Sonya</td>
                <td>Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Jena</td>
                <td>Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>$90,560</td>
            </tr>                        
        </tbody>
    </table>
    
    <button id="hideBtn">Hide Edinburgh</button>
    <input type="hidden" value="1" id="showEdinburgh"/> 