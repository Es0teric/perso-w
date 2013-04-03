<div id="sidebar_wrapper">
  <div style="width:200px; margin-left:30px">
  </div>
  <div id="agency_user_container">
    <div id="agency_name" class="center-text">
      <span>Position for company name</span>
    </div>

    <div id="agent_name" class="center-text">
      <span>
        Hello, Jane Doe
      </span>
      (<a href="#">logout</a>)
    </div>
  </div>

  <div id="sidebar">
    <ul>
      <li class="top_border">
        <!--<strong>Agency Calendar</strong>-->
        <?php if(URI::is('agency_calendar/*')) : ?>
        <strong>Agency Calendar</strong> <img src="/img/ac_plus.png" alt="nf" />
        <?php else: ?>
        <a href="agency_calendar/callsheet">Agency Calendar</a> <img src="/img/ac_plus.png" alt="nf" />
        <?php endif; ?>
      </li>

      <li>Persofolio Mail</li>
      <li>Smart Scout&#8482;</li>
      <li><a href="#">Photos And Videos</a> <!-- supposed to be "ATBC & SATB" -->
        <!-- <li>Agency Talent Book Center  -->
        <!--
          hide until needed
          <div class="side_sub_menu">
          <p>Talent Book Management</p>
          <p>Send A Talent Book</p>
          <p><b>Send A Talent Book</b></p>
          </div>
        -->
      </li>
      <!--<li><a href="/am/agentconfig/agentinfo">Account Manager</a></li>-->
      <li>Trust &amp; Verification</li>
      <!--<li>Agency Contacts</li>-->
      <li>Contacts &amp; Documents</li>
      <!--<li>My Personal Space</li>-->
    </ul>
  </div>
</div>