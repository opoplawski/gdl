#
# AC 01/08/2015
# create a copy of the current status of the CVS from nothing
#
echo '------------------------------------------------------------'
echo 'CVS disconnected on SourceForge since end of November 2017 '
echo ''
echo 'You must use the SVN version !'
echo '------------------------------------------------------------'
exit

echo 'This is for the GDLDE part : IDE for GDL'
echo ''
#
echo 'just press enter for the passwd !'
echo ''
#
CVS_PATH=/cvsroot/gnudatalanguage
CVS_SITE=anonymous@gnudatalanguage.cvs.sourceforge.net
#
cvs -d:pserver:$CVS_SITE:$CVS_PATH login
cvs -z3 -d:pserver:$CVS_SITE:$CVS_PATH checkout gdlde
#
