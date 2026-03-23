<div>
    <p>New booking request.</p>
    <div style="margin-top:30px">
        <table cellpadding="5" style="text-align:left;border-spacing:10px;border:1px #ccc solid">
            <tr>
                <td colspan="2" style="text-align:center;font-weight:bold">One-way transfer</td>
            </tr>
            <tr>
                <th>Transfer date/time</th>
                <td><?=htmlspecialchars(date('d/m/Y', strtotime($vars->arvd)), ENT_QUOTES);?> at <?=htmlspecialchars($vars->arvt, ENT_QUOTES);?></td>
            </tr>
            <tr>
                <th>Pick-up from</th>
                <td><?=htmlspecialchars($vars->arvfl, ENT_QUOTES);?></td>
            </tr>
            <tr>
                <th>Destination</th>
                <td><?=htmlspecialchars($vars->arvtl, ENT_QUOTES);?></td>
            </tr>
            <tr>
                <th>Passengers</th>
                <td><?=(int) $vars->arvp;?></td>
            </tr>
            <tr>
                <th>Flight/ship info</th>
                <td><?=htmlspecialchars($vars->arvf, ENT_QUOTES);?></td>
            </tr>
            <?php if ($vars->type == 2): ?>
            <tr>
                <td colspan="2" style="text-align:center;font-weight:bold;background-color:#edf8ff">Return transfer</td>
            </tr>
            <tr>
                <th>Transfer date/time</th>
                <td><?=htmlspecialchars(date('d/m/Y', strtotime($vars->dptd)), ENT_QUOTES);?> at <?=htmlspecialchars($vars->dptt, ENT_QUOTES);?></td>
            </tr>
            <tr>
                <th>Pick-up from</th>
                <td><?=htmlspecialchars($vars->dptfl, ENT_QUOTES);?></td>
            </tr>
            <tr>
                <th>Destination</th>
                <td><?=htmlspecialchars($vars->dpttl, ENT_QUOTES);?></td>
            </tr>
            <tr>
                <th>Passengers</th>
                <td><?=(int) $vars->dptp;?></td>
            </tr>
            <tr>
                <th>Flight/ship info</th>
                <td><?=htmlspecialchars($vars->arvf, ENT_QUOTES);?></td>
            </tr>
            <?php endif; ?>
            <?php if ($vars->notes != ''): ?>
            <tr>
                <td colspan="2" style="text-align:center;font-weight:bold;background-color:#edf8ff">Additional information</td>
            </tr>
            <tr>
                <th>Notes</th>
                <td><?=htmlspecialchars($vars->notes, ENT_QUOTES);?></td>
            </tr>
            <?php endif; ?>
            <tr>
                <td colspan="2" style="text-align:center;font-weight:bold;background-color:#edf8ff">Contact details</td>
            </tr>
            <tr>
                <th>Customer</th>
                <td><?=htmlspecialchars($vars->fname, ENT_QUOTES);?> <?=htmlspecialchars($vars->lname, ENT_QUOTES);?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?=htmlspecialchars($vars->email, ENT_QUOTES);?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?=htmlspecialchars($vars->phone, ENT_QUOTES);?></td>
            </tr>
        </table>
    </div>
</div>