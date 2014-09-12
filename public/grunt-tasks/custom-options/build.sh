# Build Script
#
if [ -n "$(git status --porcelain)" ]; then
  echo -e "\n\033[33m[Warning]\033[0m Some files need to be checked in first.\n"
else
  echo -e "\n\033[32mLet's create your build.\033[0m\n";
  git checkout build
  git merge master
  ck public
  grunt make-build
  echo ""
  echo -e "\n\033[32mBuild branch status\033[0m\n";
  read -p "\nDo you want to deploy this build? (yes/No)\n" yn
  if [[ $yn =~ ^[Yy]$ ]]; then
    git add --all
    git commit -m "Build $(date +"%d.%m.%Y %H:%M:%S")"
    git push server build:master
  fi
fi
