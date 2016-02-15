<div class="menu">
        	<div class="welcome">
        	<p class="prosto">Пивет</p><p class="neprosto"><? echo $myuser['id'];?></p><p class="prosto">твой баланс составляет</p><p class="neprosto"><? echo $myuser['balance'];?></p>
			</div>
            <div class="balance">
            <div class="input">
                    <form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
                    <input id="but" type="submit" name="input" value="ввести">
                    <input id="txt" type="text" name="ik_am" value="100.00" />
                    <input type="hidden" name="ik_co_id" value="56af05c63c1eaf256b8b4570" />
                    <input type="hidden" name="ik_pm_no" value="ID_4213" />
                    <input type="hidden" name="ik_cur" value="RUB" />
                    <input type="hidden" name="ik_desc" value="Пополнение баланса" />
                    <input type="hidden" name="ik_suc_u" value="https://dotainvest.ru/success.php" />
                    <input type="hidden" name="ik_suc_m" value="post" />
                    <input type="hidden" name="ik_fal_u" value="https://dotainvest.ru/fail.php" />
                    <input type="hidden" name="ik_fal_m" value="post" />
                    <input type="hidden" name="ik_pnd_u" value="https://dotainvest.ru/wait.php" />
                    <input type="hidden" name="ik_pnd_m" value="post" />
                    </form>
            </div>
            <div class="output">
                <form method="post" action="/" enctype="utf-8">
                <input id="but" type="submit" name="input" value="вывести">
                <input id="txt" type="text" name="ik_am" value="100.00" />
                </form>
            </div>
			
            <div class="depositText">
            	<p class="prosto">Создать вклад на сумму:</p>
            </div>
            <div class="depositButton">
                <form method="post" action="/" enctype="utf-8">
                <input id="but" type="submit" name="input" value="создать">
                <input id="txt" type="text" name="ik_am" value="1000.00" />
                </form>
            </div>
            <div class="statusDep">
            	<p class="prosto">Текушие вклады:</p>
				<form method="post" action="/logout.php" enctype="utf-8">
                <input id="but" type="submit" name="input" value="выйти">
                </form>
            </div>
            </div>
</div>