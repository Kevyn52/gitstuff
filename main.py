import sounddevice as sd
import numpy as np
import os
from scipy.io.wavfile import write
import msvcrt

SAMPLE_RATE = 22050
DURATION = 1