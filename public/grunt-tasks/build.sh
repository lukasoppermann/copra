# Build Script
#
gruntDir="public"

server="server"
if [ ! -z "$1" ]; then
  server=$1
fi

if ! git remote | grep $server > /dev/null; then
  echo -e "\n\033[31m[Error]\033[0m The remote $server does not exist\n"
  return
fi

#
if [ -n "$(git status --porcelain)" ]; then

  echo -e "\n\033[33m[Warning]\033[0m Some files need to be checked in first.\n"

else

  echo -e "\n\033[32mLet's create your build.\033[0m\n";

  git merge -s ours build
  git checkout build
  git merge master --no-edit


  if [ "${PWD##*/}" != $gruntDir ]; then
    dir="$(find . -name "$gruntDir" -type d -maxdepth 1)"
    if [ -n $dir ]; then
      cd $dir
    elif [[ -d '../public' ]]; then
      cd '../public'
    elif [[ -d '../../public' ]]; then
      cd '../../public'
    fi
  fi

  grunt make-build

  echo -e "\n\033[32mBuild branch status\033[0m\n";

  git add --all
  git commit -m "Build $(date +"%d.%m.%Y %H:%M:%S")"

  read -p "Do you want to deploy this build to $server? (y/N) " yn

  if [[ $yn =~ ^[Yy]$ ]]; then
    echo -e "\n"
    git push $server build:master
  fi
  git checkout master

fi
