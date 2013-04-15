<section class="welcome">
	<h1>Användarhantering<span>Lägg till eller hantera redan existerande användare.</span></h1>
</section>
<section id="adduser">
	<div>
		<input type="text" placeholder="Namnet" /><input type="text" placeholder="Email Adressen" /><input type="button" class="btn" value="Lägg till användare" />
	</div>
</section>
<section id="users">
	<table>
		<tr>
			<th>Namn</th>
			<th>Andvändarnamn</th>
			<th>Email Adress</th>
			<th>Klass</th>
			<th>Roll</th>
			<th>PHP</th>
			<th>Lagring</th>
			<th>Se Mer</th>
		</tr>
		<tr>
			<td>Emil Kitti</td>
			<td>EmiiilK</td>
			<td>em_ppe at hotmail.com</td>
			<td>TE2A</td>
			<td>
				<select>
					<option selected="selected">Administratör</option>
					<option>Normal</option>
				</select>
			</td>
			<td><input type="checkbox" /></td>
			<td>0.3MB</td>
			<td><a class="btn" href="#/user/{ INSERT USER ID HERE }">Mer</a></td>
		</tr>
		<tr>
			<td>Fredrik Göben</td>
			<td>Felerp</td>
			<td>Gelop at hotmail.com</td>
			<td>TE2B</td>
			<td>
				<select>
					<option>Administratör</option>
					<option selected="selected">Normal</option>
				</select>
			</td>
			<td><input type="checkbox" /></td>
			<td>0.1MB</td>
			<td><a class="btn" href="#/user/{ INSERT USER ID HERE }">Mer</a></td>
		</tr>
		<tr>
			<td>dldao dkaod</td>
			<td>djadijoaw</td>
			<td>daopdk_daok at hotmail.com</td>
			<td>TE3A</td>
			<td>
				<select>
					<option selected="selected">Administratör</option>
					<option>Normal</option>
				</select>
			</td>
			<td><input type="checkbox" /></td>
			<td>3.7MB</td>
			<td><a class="btn" href="#/user/{ INSERT USER ID HERE }">Mer</a></td>
		</tr>
	</table>
</section>