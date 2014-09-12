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
  git status
  read -p "Do you want to deploy this build? (yes/No)" -n 1
  if [[ $REPLY =~ ^[Yy]$ ]]; then
    echo "do_something"
  fi
fi
