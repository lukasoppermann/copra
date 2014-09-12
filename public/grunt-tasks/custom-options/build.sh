# Build Script
#
if [ -n "$(git status --porcelain)" ]; then
  echo -e "\n\033[33m[Warning]\033[0m Some files need to be checked in first.\n"
else
  echo "no changes";
fi
