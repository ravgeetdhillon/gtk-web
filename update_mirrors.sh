#!/usr/bin/perl

open(M, "/home/ftp/etc/mirrors");
$text .= "<font size=+2>" . <M> . "</font><br>";
<M>;
while(<M>) {
  s/^\s*(.*:\/\/.*)\s*$/&nbsp;&nbsp;&nbsp;&nbsp;<A HREF="$1">$1<\/A><BR>/g;
  s/^(\w+\s*\w+)/<BR><B>$1<\/B><BR>/g;
  $text .= $_;
};
close(M);

open(O,">mirrors_list.html");
print O $text;
close(O);
