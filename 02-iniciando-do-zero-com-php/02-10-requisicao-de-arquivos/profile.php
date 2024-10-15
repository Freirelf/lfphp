<article style="
  padding: 5px 20px;
  background-color: #eeeeee;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
">
  <h1><?=$profile->name; ?></h1>
  <p>Idade: <?=$profile->age; ?></p>
  <a title="E-mail" href="mailto:<?=$profile->email?>"><?=$profile->email?></a>
</article>