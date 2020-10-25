<?php

/*
    Homeworld - A module to  display of an Atmosphere scene in your Xoops site.
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

    This module is based on the Humorvideo module found at www.humornegro.com,which displays a daily video .

    Homeworld module created by Jose Sarmiento  aka. atmoloq , http://www.tricrosian.com/trixoops/
    for use by the Xoops and  Atmosphere comunities or any one .
    to place your world in the index , open index.php and replace the homeworld.aer with your world addy, that's it.
    questions E-Mail me at loq@tricrosian.com

*/

include 'header.php';

if ('homeworld' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();
} else {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';
}

echo '<div align=center>';
echo '  <table width="64" border="0" cellspacing="2" cellpadding="0" align="center">
			<tr>
				<td>
					<atmocontainer>
						<OBJECT ID="MetaStreamCtl" CLASSID="CLSID:03F998B2-0E00-11D3-A498-00104B6EB52E" width="500" height="600" codebase="https://components.viewpoint.com/adobe/MTSInstallers/MetaStream3.cab#Version=3,0,11">
							<EMBED Component="IAtmosphere" ComponentFileName="atmosphere_Win.mtj" src="http://www.tricrosian.com/worlds/tricrosianhw/hw2001.AER" type="application/x-mtx" name="" width="540" height="480" script="true">
							<param name="Source" value="http://www.tricrosian.com/worlds/tricrosianhw/hw2001.AER">
							<param name="Component" value="IAtmosphere">
							<param name="ComponentFileName" value="atmosphere_Win.mtj">
						</OBJECT>

					</atmocontainer>
				</td>
			</tr>
		</table>
		
		';
echo '<br>Powered By:<a href=http://www.tricrosian.com/trixoops/modules/homeworld/index.php target=_blank>www.tricrosian.com</a>';
echo '</div>';
require XOOPS_ROOT_PATH . '/footer.php';



