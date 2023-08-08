# Python powered OpenSCAD tutorial


## Installation

In order to get the latest version , get it compiled with these steps:

### Dependencies

python-dev boost

### Compilation

git clone https://github.com/gsohler/openscad.git
cd openscad
git checkout python
git submodule update --init --recursive
mkdir build
cd build
cmake -DEXPERIMENTAL=1 -DENABLE\_PYTHON=1 ..
make
sudo make install

## Walk through

Aim of Python-OpenSCAD is to have same function names as same parameter names as orginal OpenSCAD and just add power of python

