import sounddevice as sd
import numpy as np
import os
from scipy.io.wavfile import write
import msvcrt

SAMPLE_RATE = 22050
DURATION = 1
CHANNELS = 1
D_TYPE = np.int16
KEY_DECODE = "utf-8"

def record_audio(save_path, file_name):
    print("錄音中")
    audio_data = sd.rec(int(SAMPLE_RATE * DURATION), samplerate=SAMPLE_RATE, channels=CHANNELS, dtype=D_TYPE)
    sd.wait()
    file_path = os.path.join(save_path, f"{file_name}.wav")
    write(file_path, SAMPLE_RATE, audio_data)
    print(f"錄音完成 {file_name}")

if __name__ == "__main__":
    index = 0
    while True:
        try:
            key = msvcrt.getch().decode(KEY_DECODE)
        except:
            continue

        if key >= "0" and key <= "9":
            try:
                record_audio("./", f"a{index}")
                index += 1
            except:
                print("error")
        elif key == "\x1b":
            print("離開")
            break

