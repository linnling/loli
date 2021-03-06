<?php
use Loli\Locale;
/* ************************************************************************** */
/*
/*	Lian Yue
/*
/*	Url: www.lianyue.org
/*	Email: admin@lianyue.org
/*	Author: Moon
/*
/*	Created: UTC 2015-08-23 03:15:38
/*
/* ************************************************************************** */
?><!DOCTYPE html>
<html lang="<?=Locale::getLanguage()?>">
<head>
    <meta charset="utf-8" />
    <title><?=('Messages') ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1" />
    <?php if ($this['redirect_uri']): ?>
    <!-- <meta http-equiv="refresh" content="<?=$this['refresh']; ?>;URL=<?=$this['redirect_uri']; ?>" /> -->
    <?php endif; ?>
    <meta name="robots" content="none" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="applicable-device" content="pc, mobile" />
    <style type="text/css">
        *{padding:0; margin:0;}
        html{background: #f9f9f9;}
        body,input,button,select,textarea{font: medium/1.8em Tahoma,Helvetica,arial,sans-serif;color:#333;}
        body{background:#fff;width: 80%;max-width: 800px;margin: 10% auto 0 auto;border: 1px solid #dfdfdf;padding-bottom: 1.4em;}
        #title{font-size: larger;padding:.6em 1em;border-bottom: 1px solid #dfdfdf;font-weight: bold;}
        #messages{padding: 1.4em 1.4em 0 1.4em;}
        #messages .message{padding-left:1em;margin-bottom: .4em}
        #messages .message-type-1{border-left: 4px solid #7ad03a;}
        #messages .message-type-2{border-left: 4px solid #ffba00;}
        #messages .message-type-2{border-left: 4px solid #dd3d36;}
        #redirect{padding: .4em 1.4em 0 1.4em;}
        #redirect a{cursor: pointer;color: #369;}
        @media screen and (max-width: 782px) {
            body{width: 100%;margin:0;border:0;}
            html{background:#fff;}
        }
    </style>
    <script type="text/javascript">
        window.onload = function() {
            var refresh = document.getElementById('refresh');
            if (refresh) {
                refresh = refresh.firstChild;
                var redirect = document.getElementById('redirect').href;
                if (refresh.nodeValue > 0) {
                    setInterval(function() {
                        if (refresh.nodeValue <= 0) {
                            return false;
                        }
                        refresh.nodeValue--;
                        if (refresh.nodeValue <= 0) {
                    //		window.location.href = redirect;
                        }
                    }, 1000);
                } else {
                    window.location.href = redirect;
                }
            }
        }
    </script>
</head>
	<body>
		<div id="messages">
			<?php foreach($this['messages'] as $message): ?>
				<?=$message ?>
			<?php endforeach; ?>
		</div>
		<?php if ($this['redirect_uri']): ?>
			<div id="redirect-box">
				<a id="redirect" href="<?=$this['redirect_uri']?>"><?=Locale::translate(['Automatic return after {1} seconds', '<strong id="refresh">'. $this['refresh'] .'</strong>']) ?></a>
			</div>
		<?php endif; ?>
	</body>
</html>
