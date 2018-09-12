import java.io.*;
import java.awt.*;
import java.awt.event.*;
import javax.sound.sampled.*;
import javax.swing.*;

public class MeowCat {
    static File meow;
    static JLabel catlbl;
    static ImageIcon cat;
    static Point compCoords;

    public static void play(String filename) {
        try {
            Clip clip = AudioSystem.getClip();
            clip.open(AudioSystem.getAudioInputStream(new File(filename)));
            clip.start();
        }
        catch (Exception exc) {
            exc.printStackTrace(System.out);
        }
    }

    public static void main(String[] args) throws ClassNotFoundException, InstantiationException, IllegalAccessException, UnsupportedLookAndFeelException {
        UIManager.setLookAndFeel(UIManager.getSystemLookAndFeelClassName());
        cat = new ImageIcon("Cat.png");
        JFrame window = new JFrame();
        final JPanel topPanel = new JPanel();
        topPanel.setPreferredSize(new Dimension(25,25));
        topPanel.setBackground(new Color(242,242,242));
        catlbl = new JLabel(cat);
        compCoords = null;

        topPanel.addMouseListener(new MouseListener() {
            public void mouseReleased(MouseEvent e) {
                compCoords = null;
            }

            public void mousePressed(MouseEvent e) {
                compCoords = e.getPoint();
            }

            public void mouseExited(MouseEvent e) {
            }

            public void mouseEntered(MouseEvent e) {
            }

            public void mouseClicked(MouseEvent e) {
            }
        });

        topPanel.addMouseMotionListener(new MouseMotionListener() {
            public void mouseMoved(MouseEvent e) {
            }

            public void mouseDragged(MouseEvent e) {
                Point currCoords = e.getLocationOnScreen();
                window.setLocation(currCoords.x - compCoords.x, currCoords.y - compCoords.y);
            }
        });

        catlbl.addMouseListener(new MouseListener() {
            public void mouseReleased(MouseEvent e) {
                compCoords = null;
            }

            public void mousePressed(MouseEvent e) {
                play("Meow.wav");
            }

            public void mouseExited(MouseEvent e) {
            }

            public void mouseEntered(MouseEvent e) {
            }

            public void mouseClicked(MouseEvent e) {
            }
        });

        window.setUndecorated(true);
        window.add(catlbl);
        window.add(BorderLayout.NORTH, topPanel);
        window.setSize(600, 625);
        window.setLocationRelativeTo(null);
        window.setVisible(true);
    }
}
