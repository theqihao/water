cp -R ../html/* ./
echo $*
git add .
git commit -m "$*"
git push origin master
