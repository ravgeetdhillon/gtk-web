#!/usr/bin/perl

$app = 0;
$last_was_empty = 1;
open(NEWS, "gtk_news.html");
while(<NEWS>) {
  if ($_ =~ /^\s*$/) {
    $last_was_empty = 1;
    next;
  }
  $app++ if ($last_was_empty && $_ =~ /^<TABLE/);

  if ($app < 6) {
    $text .= $_;
  }
  $last_was_empty = 0;
}
close(NEWS);

open(O, ">gtk_news_top_10_tmp.html");
print O $text;
close(O);
