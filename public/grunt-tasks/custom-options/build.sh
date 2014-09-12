# Build Script
#
if [ -n "$(git status --porcelain)" ]; then
  echo -e "\n\033[33m[Warning]\033[0m Some files need to be checked in first.\n"
else
  echo -e "\n\033[32mLet's create your build.\033[0m";
fi
