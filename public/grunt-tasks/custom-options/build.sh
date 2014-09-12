# Build Script
#
if [ -n "$(git status --porcelain)" ]; then
  echo -e "\n\033[33m[Warning]\033[0m Some files need to be checked in first.\n"
else
  echo -e "\n\033[32mLet's create your build.\033[0m\n";
  git checkout build
  git merge master
  # cd public
  grunt make-build
  rm
  echo -e "\n\033[32mBuild branch status\033[0m\n";
  read -p "Do you want to deploy this build? (yes/No) " yn
  if [[ $yn =~ ^[Yy]$ ]]; then
    echo "\n"
    git add --all
    git commit -m "Build $(date +"%d.%m.%Y %H:%M:%S")"
    git push server build:master
  fi
fi
