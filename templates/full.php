<div id="app">

	<table class="table is-fullwidth is-striped table-crypto">
		<thead>
			<tr>
				<th><?php esc_html_e( 'Rank', 'webcoincc' ); ?></th>
				<th><?php esc_html_e( 'Name', 'webcoincc' ); ?></th>
				<th><?php esc_html_e( 'Sembol', 'webcoincc' ); ?></th>
				<th><?php esc_html_e( 'Fiyat', 'webcoincc' ); ?> (<?php esc_html_e( '฿', 'webcoincc' ); ?>)</th>
				<th><?php esc_html_e( 'Fiyat', 'webcoincc' ); ?> (<?php esc_html_e( '$', 'webcoincc' ); ?>)</th>
				<th><?php esc_html_e( 'Fiyat', 'webcoincc' ); ?> (<?php esc_html_e( '₺', 'webcoincc' ); ?>)</th>
				<th>1 <?php esc_html_e( 'Saat', 'webcoincc' ); ?></th>
				<th>1 <?php esc_html_e( 'Gün', 'webcoincc' ); ?></th>
				<th>1 <?php esc_html_e( 'Hafta', 'webcoincc' ); ?></th>
				<th><?php esc_html_e( 'Piyasa Değeri', 'webcoincc' ); ?> (<?php esc_html_e( '$', 'webcoincc' ); ?>)</th>
				<th><?php esc_html_e( 'Piyasa Değeri', 'webcoincc' ); ?> (<?php esc_html_e( '₺', 'webcoincc' ); ?>)</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="coin in coins">
				<td>{{ coin.rank }}</td>
				<td><img v-bind:src="getCoinImage(coin.id)" v-bind:alt="coin.name"> {{ coin.name }}</td>
				<td>{{ coin.symbol }}</td>
				<td><strong>{{ coin.price_btc | currency('฿') }}</strong></td>
				<td>{{ coin.price_usd | currency('$') }}</td>
				<td>{{ coin.price_try | currency('₺') }}</td>
				<td v-bind:style="getColor(coin.percent_change_1h)"><span v-if="coin.percent_change_1h > 0">+</span>%{{ coin.percent_change_1h }}</td>
				<td v-bind:style="getColor(coin.percent_change_24h)"><span v-if="coin.percent_change_24h > 0">+</span>%{{ coin.percent_change_24h }}</td>
				<td v-bind:style="getColor(coin.percent_change_7d)"><span v-if="coin.percent_change_7d > 0">+</span>%{{ coin.percent_change_7d }}</td>
				<td>{{ coin.market_cap_usd | currency('$') }}</td>
				<td>{{ coin.market_cap_try | currency('₺') }}</td>
			</tr>
		</tbody>
	</table>

	<div><?php esc_html_e( '* Veriler 1 dakika arayla güncellenmektedir.', 'webcoincc' ); ?></div>

	<?php // Please don't remove. Thanks ?>
	<a href="http://coinekonomi.com" title="Bitcoin" style="font-size:10px; color:#ccc;"><?php esc_html_e( 'Bitcoin', 'webcoincc' ); ?></a>

</div>
