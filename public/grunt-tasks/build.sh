# Build Script
#
gruntDir="public"
#
if [ -n "$(git status --porcelain)" ]; then

  echo -e "\n\033[33m[Warning]\033[0m Some files need to be checked in first.\n"

else

  echo -e "\n\033[32mLet's create your build.\033[0m\n";
  git checkout build
  git merge master

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

  read -p "Do you want to deploy this build? (yes/No) " yn

  if [[ $yn =~ ^[Yy]$ ]]; then
    echo -e "\n"
    git add --all
    git commit -m "Build $(date +"%d.%m.%Y %H:%M:%S")"
    git push server build:master
    git checkout  master
  fi

fi
