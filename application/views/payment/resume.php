<div class="row-fluid">
        <div class="span24 well well-mini">
                <h4><?=lang("pay_paymentMethods")?></h4>

                <?php if( $boleto || $giftcard || $creditcard || $debitcard || $deposit || $cash || $pagseguro || $paypal ) { ?>
                <div class="row-fluid">
                        <div class="span24">
                                <h5><?=lang("pay_InCash")?></h5>
                                <div class="row-fluid">
                                        <?php if($boleto) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_boleto")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/boleto.jpg"></span> <?php } ?>
                                        <?php if($giftcard) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_giftcard")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/prepayd.jpg"></span> <?php } ?>
                                        <?php if($creditcard) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_creditcard")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/credit.jpg"></span> <?php } ?>
                                        <?php if($debitcard) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_debitcard")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/debit.jpg"></span> <?php } ?>
                                        <?php if($deposit) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_deposit")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/deposito.jpg"></span> <?php } ?>
                                        <?php if($cash) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_cash")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/dinheiro.jpg"></span> <?php } ?>
                                        <?php if($pagseguro) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_pagseguro")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/pagseguro.jpg"></span> <?php } ?>
                                        <?php if($paypal) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_paypal")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/paypal.jpg"></span> <?php } ?>
                                </div>
                        </div>
                </div>
                <?php } ?>

                <?php if( $installmentsCreditcard || $installmentsBoleto || $booklet ) { ?>
                <hr>
                <div class="row-fluid">
                        <div class="span24">
                                <h5><?=lang("pay_ByInstallments")?></h5>
                                <div class="row-fluid">
                                        <span class="pull-left text-center tzdTableRow">
                                                <p><strong class="font12"><?=lang("pay_until")?> <b class="text-success"><?=$installmentsWithNoInterests?>x</b> <?=lang("pay_timesWithNoInterestRate")?></strong></p>
                                                <p>ou</p>
                                                <strong class="font12"><?=lang("pay_until")?> <b class="text-success"><?=$installmentsWithInterests?>x</b> <?=lang("pay_timesWithInterestRate")?> <b class="text-success"><?=$interests?></b> % <?=lang("pay_perMonth")?></strong>
                                        </span>
                                        <?php if( $installmentsCreditcard ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_installmentsCreditcard")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/credit.jpg"></span> <?php } ?>
                                        <?php if( $installmentsBoleto ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_installmentsBoleto")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/boleto.jpg"></span> <?php } ?>
                                        <?php if( $booklet ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_booklet")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/booklet.gif"></span> <?php } ?>
                                </div>
                        </div>
                </div>
                <?php } ?>


                <?php if( $installmentsCreditcard && ( $ccAmericanExpress || $ccAura || $ccBNDES || $ccDinersClub || $ccElo || $ccHipercard || $ccMastercard || $ccSorocred || $ccVisa )  ) { ?>
                <hr>
                <div class="row-fluid">
                        <div class="span24">
                                <h5><?=lang("pay_paymentFlag")?></h5>
                                <div class="row-fluid">
                                        <?php if( $ccAmericanExpress ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccAmericanExpress")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/americanexpress.jpg"></span> <?php } ?>
                                        <?php if( $ccAura ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccAura")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/aura.jpg"></span> <?php } ?>
                                        <?php if( $ccBNDES ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccBNDES")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/bndes.jpg"></span> <?php } ?>
                                        <?php if( $ccDinersClub ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccDinersClub")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/dinersclub.jpg"></span> <?php } ?>
                                        <?php if( $ccElo ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccElo")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/elo.jpg"></span> <?php } ?>
                                        <?php if( $ccHipercard ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccHipercard")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/hipercard.jpg"></span> <?php } ?>
                                        <?php if( $ccMastercard ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccMastercard")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/mastercard.jpg"></span> <?php } ?>
                                        <?php if( $ccSorocred ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccSorocred")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/sorocred.jpg"></span> <?php } ?>
                                        <?php if( $ccVisa ) { ?> <span class="pull-left text-center tzdTableRow"><p><?=lang("pay_ccVisa")?></p><img class="imgSmallMini" src="<?=assets_url()?>/img/payment/visa.jpg"></span> <?php } ?>
                                </div>
                        </div>
                </div>
                <?php } ?>
        </div>
</div>
